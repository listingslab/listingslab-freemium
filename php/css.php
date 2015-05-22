<?php
	/* Creates an inline CSS stylesheet which overides the 
	 * default jQuery UI styles in certain certain situations */
 	$ui = array ();
	$ui ['ui_folder'] = get_template_directory_uri().'/js/jquery-ui/';
 	$ui ['icon'] = $ui ['ui_folder'].'images/ui-icons_ffffff_256x240.png'; // black or white
	$ui ['toolbar_bg'] = '#7a7a7a'; //a3a7b2
	$ui ['toolbar_text'] = '#fff'; //c8d7ff
	$ui ['content_bg'] = '#eee'; //f4f6fa
	$ui ['content_text'] = '#083443'; //434672
	$ui ['btn_text'] = '#fff'; //d8dff1
	$ui ['border'] = '#ccc'; //ff451a
	$ui ['default'] = '#787878'; //883589
	$ui ['hover'] = '#a9a9a9'; //b86eb9
	$ui ['active'] = '#535353'; //631064
	$ui ['highlight'] = 'yellow'; //fffc00
	$ui ['error'] = 'red'; //cd0a0a
?>
<style>
	/* Dynamically change jQuery UI colours with inline CSS
	 * Find out how here http://wp.me/P5Q8N9-1eS */
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
	.ui-state-highlight .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-error .ui-icon, .ui-state-error-text .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-widget * { outline: none; }​
</style> 