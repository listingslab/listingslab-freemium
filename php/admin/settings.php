<?php
include 'style.php';
include 'javascript.php';
global $current_user;
	$c = array ();
	get_currentuserinfo();
//ID, user_login, user_email, user_firstname, user_lastname, display_name
	$c ['message_title'] = 'Hi '.$current_user->display_name. ',';
	$c ['message_text'] = 'Welcome to FREEmium for WordPress.';
	$g = array ();
 	$g ['get'] = $_GET;
	if (isset ($g ['get']['action'])){
		if ($g ['get']['action'] == 'update_icon'){
			if (isset ($g ['get']['file'])){
				$c ['file_url'] = wp_get_attachment_medium_url ( $g ['get']['file'] );
				set_theme_mod( 'icon', $c ['file_url'] );
				$c ['message_title'] = 'Icon Updated';
				$c ['message_text'] = 'Your icon has been updated. ';
				$c ['message_text'] .= '<a href="'.get_site_url().'">view site?</a>';
			}
		}
	}
	/*print '<pre>';
	print_r ($c);
	print '</pre>';*/
?>
<h1 class="admin_title">FREEmium Settings</h1>
<?php include 'message.php'; ?>
<?php //include 'banner.php'; ?>
<?php //include 'colours.php'; ?>
<?php include 'icon.php'; ?>