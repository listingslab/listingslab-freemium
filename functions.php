<?php
 /* Listingslab FREEmium WordPress Theme	
 * by Chris Dorward @listingslab http://listingslab.com */
error_reporting(E_ALL); ini_set('display_errors', '1');
include 'php/functions/custom_login.php';
include 'php/functions/customize.php';
include 'php/functions/get_desc.php';
include 'php/functions/get_server.php';
include 'php/functions/get_short_content.php';
include 'php/functions/print_categories.php';
include 'php/functions/setup_jqueryui.php';
include 'php/functions/thisurl.php';
include 'php/functions/featured_image.php';
include 'php/shortcodes/shortcodes.php';
include 'php/widgets/widgets.php';
include 'php/twentyfifteen/twentyfifteen_functions.php';
include 'php/admin/admin-menu.php';
//include 'php/admin/notice.php'; 

function wp_get_attachment_medium_url ( $id ){
    $medium_array = image_downsize( $id, 'medium' );
    $medium_path = $medium_array[0];
    return $medium_path;
}