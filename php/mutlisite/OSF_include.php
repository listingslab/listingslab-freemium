<!-- START OSFrontend Include -->
<?php
	global $OSF;
	///////////////////////////////////////////////// App Information
	$OSF ['title'] = 'MicroSite Explorer';
	$OSF ['site'] = 'Living Websites Cloud';
	$OSF ['desc'] = 'MicroSite manager for WorPress MultiSite';
	$OSF ['url'] = OSF_this_url ();
	// OSF_path - path to the OSFrontend install you are using
	$OSF ['OSF_path'] = 'http://osfrontend.com/';
	///////////////////////////////////////////////// App settings
	$OSF ['domain'] = 'http://' . $_SERVER['SERVER_NAME'] . '/';
	$OSF ['server_name'] = $_SERVER['SERVER_NAME'];
	$OSF ['this_app'] = 'http://living-websites-cloud.eu/apps/microsite-explorer/';
	///////////////////////////////////////////////// App Shape
	$OSF ['width'] = '800px';
	$OSF ['left_width'] = '60%';
	$OSF ['right_width'] = '35%';
	$OSF ['align'] = 'center';
	$OSF ['author'] = 'listingslab';
	///////////////////////////////////////////////// Images
	$OSF ['icon'] = 'http://living-websites-cloud.eu/wp-content/uploads/2014/08/newlwclogo.png';
	$OSF ['favicon'] = 'http://living-websites-cloud.eu/wp-content/uploads/2014/08/newlwclogo.png';
	$OSF ['logo'] = 'http://living-websites-cloud.eu/wp-content/uploads/2014/08/newlwclogo.png';
	///////////////////////////////////////////////// Edit Colours
	$OSF ['ui_theme'] = 'OSFrontend';
	$OSF ['body_color'] = '#eee';
	$OSF ['headings_color'] = '#00688b';
	$OSF ['links_color'] = '#00688b';
	$OSF ['dark_panel_color'] = '#00688b';
	$OSF ['dark_panel_color2'] = '#00b2ee';
	$OSF ['border_color'] = '#ddd';
	$OSF ['panel_bg_color'] = '#fbfbfb';
	$OSF ['text_color'] = '#555555';
	$OSF ['light_color'] = '#00b2ee';
	$OSF ['light_text_color'] = '#ffffff';
	///////////////////////////////////////////////// Geo Location
	$OSF ['geo_region'] = 'FR'; 
	$OSF ['geo_placename'] = 'Chamonix'; 
	$OSF ['geo_position'] = '46.002614;6.946137';  
	$OSF ['geo_ICBM'] = '46.002614, 6.946137';
?>
			<script src="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
			<script src="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.min.js"></script>
			<link href="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/jquery-ui-1.10.4/css/<?php print $OSF ['ui_theme']; ?>/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
			
			
			<script src="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/OSFrontend/Main.js"></script>
			<script src="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/OSFrontend/model.js"></script>
			<script src="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/OSFrontend/view.js"></script>
			<script src="<?php print $OSF ['OSF_path']; ?>includes/JavaScript/OSFrontend/controller.js"></script>
			<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'> -->
			<script type="text/javascript">
				OSF = [];
				OSF ['title'] = '<?php print $OSF ['title']; ?>';
				OSF ['width'] = '<?php print $OSF ['width']; ?>';
				OSF ['left_width'] = '<?php print $OSF ['left_width']; ?>';
				OSF ['right_width'] = '<?php print $OSF ['right_width']; ?>';
				OSF ['align'] = '<?php print $OSF ['align']; ?>';
				OSF ['headings_color'] = '<?php print $OSF ['headings_color']; ?>';
				OSF ['links_color'] = '<?php print $OSF ['links_color']; ?>';
				OSF ['body_color'] = '<?php print $OSF ['body_color']; ?>';
				OSF ['border_color'] = '<?php print $OSF ['border_color']; ?>';
				OSF ['panel_bg_color'] = '<?php print $OSF ['panel_bg_color']; ?>';
				OSF ['text_color'] = '<?php print $OSF ['text_color']; ?>';
				OSF ['light_color'] = '<?php print $OSF ['light_color']; ?>';
				OSF ['light_text_color'] = '<?php print $OSF ['light_text_color']; ?>';
				OSF ['dark_panel_color'] = '<?php print $OSF ['dark_panel_color']; ?>';
				OSF ['dark_panel_color2'] = '<?php print $OSF ['dark_panel_color2']; ?>';
				setTimeout(function(){
					try {
						OSF_css ($('#OSFrontend'), 'visibility', 'visible');
					}catch (err){
						alert (err);	
					}
				},2000);
			</script>
	<?php 
		function OSF_this_url (){
			$pageURL = 'http'; if (isset($_SERVER["HTTPS"])){if ($_SERVER["HTTPS"] == "on") { $pageURL .= "s";}} $pageURL .= "://"; if ($_SERVER["SERVER_PORT"] != "80") {$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; } else { $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];}
			return $pageURL;
		}
		//print '<pre>'; print_r ($OSF); print '</pre>'; 
	?>
	<!-- END OSFrontend Include -->
	
