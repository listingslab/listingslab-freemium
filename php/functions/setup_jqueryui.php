<?php
/*
 * setup_jqueryui () 
 * Replaces built in jQuery and includes jQuery UI
 * & listingslab's MVC javaScript framework */
function setup_jqueryui() {
	if (!is_admin()) {
		$theme = 'universal';
		wp_enqueue_style( 'jqueryui', get_template_directory_uri() . '/js/jquery-ui/'.$theme.'/jquery-ui.css' );
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-ui/'.$theme.'/external/jquery/jquery.js', false, '1.10.2');
		wp_enqueue_script('jquery');
		wp_register_script('jqueryui', get_template_directory_uri() . '/js/jquery-ui/'.$theme.'/jquery-ui.js', false, '1.11.3');
		wp_enqueue_script('jqueryui');
		wp_register_script('ion_sound', get_template_directory_uri() . '/js/ion_sound/js/ion.sound.js', false, '1');
		wp_enqueue_script('ion_sound');
		wp_register_script('hotkeys', get_template_directory_uri() . '/js/jquery.hotkeys/jquery.hotkeys.js', false, '1');
		wp_enqueue_script('hotkeys');
		
		// MVC Design Pattern //
		wp_register_script('Main', get_template_directory_uri() . '/js/Main.js', false, '1');
		wp_enqueue_script('Main');
		wp_register_script('model', get_template_directory_uri() . '/js/model.js', false, '1');
		wp_enqueue_script('model');
		wp_register_script('view', get_template_directory_uri() . '/js/view.js', false, '1');
		wp_enqueue_script('view');
		wp_register_script('controller', get_template_directory_uri() . '/js/controller.js', false, '1');
		wp_enqueue_script('controller');
		
		// Shortcodes //
		wp_register_script('shortcode-blog', get_template_directory_uri() . '/js/FREEmium_Shortcodes/blog.js', false, '1');
		wp_enqueue_script('shortcode-blog');
		
		// OSFrontend //
		wp_register_script('osf_jqcookie', get_template_directory_uri() . '/osfrontend/osf_jqcookie.js', false, '1');
		wp_enqueue_script('osf_jqcookie');
		wp_register_script('osf_cookie', get_template_directory_uri() . '/osfrontend/osf_cookie.js', false, '1');
		wp_enqueue_script('osf_cookie');
		wp_register_script('osf_date', get_template_directory_uri() . '/osfrontend/osf_date.js', false, '1');
		wp_enqueue_script('osf_date');
		wp_register_script('osf_dialog', get_template_directory_uri() . '/osfrontend/osf_dialog.js', false, '1');
		wp_enqueue_script('osf_dialog');
		wp_register_script('osf_dispatch', get_template_directory_uri() . '/osfrontend/osf_dispatch.js', false, '1');
		wp_enqueue_script('osf_dispatch');
		wp_register_script('osf_interval', get_template_directory_uri() . '/osfrontend/osf_interval.js', false, '1');
		wp_enqueue_script('osf_interval');
		
		wp_register_script('osf_message', get_template_directory_uri() . '/osfrontend/osf_message.js', false, '1');
		wp_enqueue_script('osf_message');
		wp_register_script('osf_request', get_template_directory_uri() . '/osfrontend/osf_request.js', false, '1');
		wp_enqueue_script('osf_request');
		wp_register_script('osfrontend', get_template_directory_uri() . '/osfrontend/osfrontend.js', false, '1');
		wp_enqueue_script('osfrontend');
		
	}
}
add_action('init', 'setup_jqueryui');
?>