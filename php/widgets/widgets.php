<?php
/********* FREEmium Widgets v.1.1 ************/
define( 'FREEmium_WIDGETS_VERSION', '1.1' );
function listingslab_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Side or Top Widget Area', 'listingslab' ),
		'id'            => 'side_top',
		'description'   => __( 'Stuff here is responsive', 'listingslab' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Admin Widgets', 'listingslab' ),
		'id'            => 'admin_widgets',
		'description'   => __( 'Admin widgets only', 'listingslab' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'listingslab_widgets_init' );