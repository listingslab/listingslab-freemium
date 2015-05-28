<?php
/********* FREEmium Widgets v.1.1 ************/
define( 'FREEmium_WIDGETS_VERSION', '1.1' );
function listingslab_widgets_init() {
	register_sidebar( array(
		'name'          => 'FREEmium Widget Area',
		'id'            => 'side_top',
		'description'   => 'For adding stuff to the place where the laptop is',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'listingslab_widgets_init' );