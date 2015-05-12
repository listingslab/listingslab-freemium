<?php
/********* FREEmium ADMIN v.1.3 ************/
define( 'FREEmium_ADMIN_VERSION', '1.3' );

function FREEmium_menu() {
	add_menu_page(__('FREEmium','FREEmium_menu'), __('FREEmium','FREEmium-menu'), 'manage_options', 'FREEmium', 'FREEmium_settings', get_template_directory_uri().'/img/png/system/tick_orange.png', 1);
	//add_submenu_page('FREEmium', __('FREEmium Sublevel','FREEmium-menu'), __('Images','FREEmium-menu'), 'manage_options', 'FREEmium_images', 'FREEmium_images_page');
}
function FREEmium_settings () {
	print '<div id="FREEmium_admin">';
	include 'settings.php';
	print '</div>';
}
function FREEmium_images_page () {
	print '<div id="FREEmium_admin">';
	print 'FREEmium_images_page';
	print '</div>';
}
add_action('admin_menu', 'FREEmium_menu');

function FREEmium_admin_scripts() {
	wp_enqueue_media();
	wp_enqueue_script ('custom-header' );
}
 
function FREEmium_admin_styles() {
	wp_enqueue_style('thickbox');
}
 
if (isset($_GET['page']) && $_GET['page'] == 'FREEmium') {
	add_action('admin_print_scripts', 'FREEmium_admin_scripts');
	add_action('admin_print_styles', 'FREEmium_admin_styles');
}
