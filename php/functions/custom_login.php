<?php /********* Listingslab Custom WordPress Login v.1.1 / 
/*
 * sets up a customised login experience when included in
 * the functions.php file

 * If there is an icon,
 * get_option('_2014_options')
 * use it, otherwise set a default
 * get_template_directory_uri();.'/img/png/anonymous.png'
 * FREEmium_icon.png 
 *  */

// Change wp-login.php form header logo & link & title
function ll_custom_login_logo() {
	$icon = get_theme_mod ('icon', get_template_directory_uri().'/img/png/FREEmium.png');
	print '<style type="text/css">
		h1 a { background-image:url('.$icon.') !important; }
	</style>';
}

add_action('login_head', 'll_custom_login_logo');
function ll_change_wplogin_url() {
	return get_bloginfo ('url').'?show=menu';
}

add_filter('login_headerurl', 'll_change_wplogin_url');
function ll_change_wplogin_title() {
	return '' . get_option('blogname') . ' Account';
}
add_filter('login_headertitle', 'll_change_wplogin_title');


?>