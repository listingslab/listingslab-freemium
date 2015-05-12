<?php
/**
 * Listingslab FREEmium back compat functionality
 *
 * Prevents Listingslab FREEmium from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage listingslab_freemium
 * @since Listingslab FREEmium 1.0
 */

/**
 * Prevent switching to Listingslab FREEmium on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Listingslab FREEmium 1.0
 */
function twentyfifteen_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'twentyfifteen_upgrade_notice' );
}
add_action( 'after_switch_theme', 'twentyfifteen_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Listingslab FREEmium on WordPress versions prior to 4.1.
 *
 * @since Listingslab FREEmium 1.0
 */
function twentyfifteen_upgrade_notice() {
	$message = sprintf( __( 'Listingslab FREEmium requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'twentyfifteen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since Listingslab FREEmium 1.0
 */
function twentyfifteen_customize() {
	wp_die( sprintf( __( 'Listingslab FREEmium requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'twentyfifteen' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'twentyfifteen_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since Listingslab FREEmium 1.0
 */
function twentyfifteen_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Listingslab FREEmium requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'twentyfifteen' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'twentyfifteen_preview' );
