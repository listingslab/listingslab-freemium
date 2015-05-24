<?php
define( 'FREEmium_SHORTCODES_VERSION', '1.3' );

include 'FREEmium/account.php';
include 'FREEmium/blog.php';
include 'FREEmium/child-sibling.php';
include 'FREEmium/jgallery.php';
include 'FREEmium/microsites.php';
include 'FREEmium/search.php';
include 'elegant_themes/et_pb_section.php';

// Template shortcode function, cut & paste, brah
add_shortcode ('ll_shortcode', 'll_shortcode');
function ll_shortcode ($atts, $content = null) {
	$output = 'Outputting: ll_shortcode';
	return $output;
}