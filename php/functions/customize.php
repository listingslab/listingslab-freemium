<?php
 /* Listingslab FREEmium WordPress Theme	
 * by Chris Dorward @listingslab http://listingslab.com */

add_action('customize_register', 'freemium_customize');
function freemium_customize ($wp_customize) {
    
	$wp_customize->add_setting( 'htags_colour', array(
        'default'        => '#4d4d4d',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'freemium_htags_colour', array(
        'label'   => 'Headings Colour',
        'section' => 'colors',
        'settings'   => 'htags_colour',
    ) ) );
    $wp_customize->add_setting( 'link_colour', array(
        'default'        => '#4d4d4d',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'freemium_link_colour', array(
        'label'   => 'Link Colour',
        'section' => 'colors',
        'settings'   => 'link_colour',
    ) ) );
	$wp_customize->add_setting( 'text_colour', array(
        'default'        => '#000000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'freemium_text_colour', array(
        'label'   => 'Text Colour',
        'section' => 'colors',
        'settings'   => 'text_colour',
    ) ) );
	$wp_customize->add_setting( 'sidebar_text_colour', array(
        'default'        => '#4d4d4d',
    ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'freemium_sidebar_colour', array(
        'label'   => 'Sidebar Link Colour',
        'section' => 'colors',
        'settings'   => 'sidebar_text_colour',
    ) ) );

	$wp_customize->add_setting( 'border_colour', array(
        'default'        => '#eaeaea',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'freemium_border_colour', array(
        'label'   => 'Border Colour',
        'section' => 'colors',
        'settings'   => 'border_colour',
    ) ) );	
}
?>