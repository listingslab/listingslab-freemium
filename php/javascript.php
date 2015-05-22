<?php
	include 'themes.php';
?>
	
	<script type="text/javascript">
		FREEmium = [];
		FREEmium ['version'] = 'FREE';
		FREEmium ['app_root'] = '<?php print get_template_directory_uri();?>/';
		FREEmium ['cookie_domain'] = '<?php print $_SERVER ['SERVER_NAME'];?>';
		FREEmium ['colours'] = [];
		FREEmium ['colours']['htags'] = '<?php print $FREEmium ['theme']['htags'];?>';
		FREEmium ['colours']['links'] = '<?php print $FREEmium ['theme']['links'];?>';
		FREEmium ['colours']['text'] = '<?php print $FREEmium ['theme']['text'];?>';
		
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