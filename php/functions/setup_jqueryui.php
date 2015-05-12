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
		
	}
}
add_action('init', 'setup_jqueryui');
?>