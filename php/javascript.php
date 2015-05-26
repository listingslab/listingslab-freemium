<?php
	include 'themes.php';
?>
	
	<script type="text/javascript">
		FREEmium = [];
		FREEmium ['version'] = 'FREE';
		FREEmium ['theme_path'] = '<?php print get_template_directory_uri();?>/';
		FREEmium ['cookie_domain'] = '<?php print $_SERVER ['SERVER_NAME'];?>';
		FREEmium ['colours'] = [];
		FREEmium ['colours']['htags'] = '<?php print $FREEmium ['theme']['htags'];?>';
		FREEmium ['colours']['links'] = '<?php print $FREEmium ['theme']['links'];?>';
		FREEmium ['colours']['text'] = '<?php print $FREEmium ['theme']['text'];?>';
		FREEmium ['colours']['ui_default'] = '<?php print get_theme_mod ('ui_default', '#f4f4f4');?>';
		FREEmium ['colours']['ui_hover'] = '<?php print get_theme_mod ('ui_hover', '#e6e5e5');?>';
		FREEmium ['colours']['ui_active'] = '<?php print get_theme_mod ('ui_active', '#d7d7d7');?>';
		FREEmium ['colours']['ui_border'] = '<?php print get_theme_mod ('ui_border', '#b6b6b6');?>';
		FREEmium ['colours']['ui_content_bg'] = '<?php print get_theme_mod ('ui_content_bg', '#ffffff');?>';
		
		
		FREEmium ['served_by'] = '<?php print get_server ();?>';
		setTimeout(function(){
			try {
				_css ($('#FREEmium'), 'visibility', 'visible');
			}catch (err){
				//alert ('FREEmium not loaded \n\n' + err);	
			}
		},5000);
	</script>
	<style>#FREEmium { visibility: hidden; } </style>