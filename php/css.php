<?php
	// Listingslab Open Source
	$o = array ();
	/*print '<pre>';
	print_r ($o);
	print '</pre>';*/
	$o['_light'] = 'red';
	$o['_dark'] = 'blue';
	$o['_mid'] = 'grey';
	$o['_img_path'] = get_template_directory_uri(). '/js/jquery-ui/universal/images';
?>
<style>
	
	::selection {
		background: <?php print $o['_dark'];?>;
		color: #fff;
		text-shadow: none;
	}
	::-moz-selection {
		background: <?php print $o['_dark'];?>;
		color: #fff;
		text-shadow: none;
	}
	.ui-widget-header {
		background: <?php print $o['_dark'];?>;
	}
	.ui-state-default,
	.ui-widget-content .ui-state-default,
	.ui-widget-header .ui-state-default {
		background: <?php print $o['_mid'];?>;
	}
	.ui-state-hover,
	.ui-widget-content .ui-state-hover,
	.ui-widget-header .ui-state-hover,
	.ui-state-focus,
	.ui-widget-content .ui-state-focus,
	.ui-widget-header .ui-state-focus {
		background: <?php print $o['_dark'];?>;
	}
	.ui-state-active,
	.ui-widget-content .ui-state-active,
	.ui-widget-header .ui-state-active {
		background: <?php print $o['_light'];?>;
	}
</style> 