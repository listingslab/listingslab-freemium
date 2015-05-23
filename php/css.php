<?php
	/* Creates an inline CSS stylesheet which overides the 
	 * default jQuery UI styles in certain certain situations */
 	$ui = array ();
	$ui ['jq-ui'] = get_template_directory_uri().'/js/jquery-ui/images/';
 	$icon_color = get_theme_mod ('ui_icon', 'white');;
 	$ui ['icon'] = $ui ['jq-ui'];
 	if ($icon_color == 'white'){
 		$ui ['icon'] .= 'ui-icons_ffffff_256x240.png';
 	}else if ($icon_color == 'black'){
 		$ui ['icon'] .= 'ui-icons_000000_256x240.png';
 	}
	
	
	$ui ['pagelinks'] = get_theme_mod ('link_colour', '#000000');
	$ui ['default'] = get_theme_mod ('ui_default', '#f4f4f4');
	$ui ['hover'] = get_theme_mod ('ui_hover', '#e6e5e5');
	$ui ['active'] = get_theme_mod ('ui_active', '#d7d7d7');
	$ui ['border'] = get_theme_mod ('ui_border', '#b6b6b6');
	$ui ['btn_text'] = get_theme_mod ('ui_btn_text', '#000000');
	$ui ['toolbar_bg'] = get_theme_mod ('ui_toolbar_bg', '#7a7a7a');
	$ui ['content_bg'] = get_theme_mod ('ui_content_bg', '#ffffff');
	
	$ui ['toolbar_text'] = '#fff'; //c8d7ff
	
	$ui ['content_text'] = '#083443'; //434672
?>
<style>
	/* Dynamically change jQuery UI colours with inline CSS
	 * Find out how here http://wp.me/P5Q8N9-1eS */
	a {color: <?php print $ui ['pagelinks'];?>;}
	::selection {background: <?php print $ui ['default'];?>;color: #fff;text-shadow: none;}
	::-moz-selection {background: <?php print $ui ['default'];?>;color: #fff;text-shadow: none;}
	.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight {background: <?php print $ui ['highlight'];?>;}
	.ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error {background: <?php print $ui ['error'];?>;}
	.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default {background: <?php print $ui ['default'];?>;}
	.ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus {background: <?php print $ui ['hover'];?>;}
	.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active {background: <?php print $ui ['active'];?>;}
	.ui-widget-content {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-widget-header {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error {border: 1px solid <?php print $ui ['border'];?>;}
	.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus { color: <?php print $ui ['btn_text'];?>;}
	.ui-state-hover a,.ui-state-hover a:hover,.ui-state-hover a:link,.ui-state-hover a:visited,.ui-state-focus a,.ui-state-focus a:hover,.ui-state-focus a:link,.ui-state-focus a:visited {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-active a,.ui-state-active a:link,.ui-state-active a:visited {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-default a,.ui-state-default a:link,.ui-state-default a:visited {color: <?php print $ui ['btn_text'];?>;}
	.ui-widget-content { background: <?php print $ui ['content_bg'];?>; color: <?php print $ui ['content_text'];?>;}
	.ui-widget-content a { color: <?php print $ui ['content_text'];?>;}
	.ui-widget-header {background: <?php print $ui ['toolbar_bg'];?>;}
	.ui-widget-header {color: <?php print $ui ['toolbar_text'];?>}
	.ui-widget-header a {color: <?php print $ui ['toolbar_text'];?>;}
	.ui-icon,.ui-widget-content .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-widget-header .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-default .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-hover .ui-icon, .ui-state-focus .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-active .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-widget * { outline: none; }​
</style> 