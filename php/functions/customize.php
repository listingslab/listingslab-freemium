<?php
	/* Listingslab FREEmium WordPress Theme	
	* by Chris Dorward @listingslab http://listingslab.com
	*/
/**
 * Adds the individual sections, settings, and controls 
 * to the theme customizer
 */
function freemium_customize ($wp_customize) {
	///// Headings (H tags) Colour
	$wp_customize->add_setting( 'htags_colour', array(
        'default'       => '#4d4d4d',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_htags_colour', array(
        'label'   => 'Headings (H tags) Colour',
        'section' => 'colors',
        'settings'   => 'htags_colour',
    ) ) );
	///// Page Link Colour
    $wp_customize->add_setting( 'link_colour', array(
        'default'        => '#4d4d4d',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_link_colour', array(
        'label'   => 'Page Link Colour',
        'section' => 'colors',
        'settings'   => 'link_colour',
    ) ) );
	///// Text Colour
	$wp_customize->add_setting( 'text_colour', array(
        'default'        => '#000000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_text_colour', array(
        'label'   => 'Text Colour',
        'section' => 'colors',
        'settings'   => 'text_colour',
    ) ) );
	
	///// jQuery UI Default
	$wp_customize->add_setting( 'ui_default', array(
        'default'        => '#f4f4f4',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_default', array(
        'label'   => 'UI Default Colour',
        'section' => 'colors',
        'settings'   => 'ui_default',
    ) ) );
	
	///// jQuery UI Hover
	$wp_customize->add_setting( 'ui_hover', array(
        'default'        => '#e6e5e5',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_hover', array(
        'label'   => 'UI Hover Colour',
        'section' => 'colors',
        'settings'   => 'ui_hover',
    ) ) );
	
	///// jQuery UI Hover
	$wp_customize->add_setting( 'ui_active', array(
        'default'        => '#d7d7d7',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_active', array(
        'label'   => 'UI Active Colour',
        'section' => 'colors',
        'settings'   => 'ui_active',
    ) ) );
	
	///// jQuery UI Border
	$wp_customize->add_setting( 'ui_border', array(
        'default'        => '#b6b6b6',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_border', array(
        'label'   => 'UI Border Colour',
        'section' => 'colors',
        'settings'   => 'ui_border',
    ) ) );
	
	///// UI Button Text Colour
	$wp_customize->add_setting( 'ui_btn_text', array(
        'default'        => '#000000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_btn_text', array(
        'label'   => 'UI Button Text Colour',
        'section' => 'colors',
        'settings'   => 'ui_btn_text',
    ) ) );
	
	///// UI Toolbar Background Colour
	$wp_customize->add_setting( 'ui_toolbar_bg', array(
        'default'        => '#000000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_toolbar_bg', array(
        'label'   => 'UI Toolbar Background Colour',
        'section' => 'colors',
        'settings'   => 'ui_toolbar_bg',
    ) ) );
	
	///// UI Content Background Colour
	$wp_customize->add_setting( 'ui_content_bg', array(
        'default'        => '#ffffff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( 
    $wp_customize, 'freemium_ui_content_bg', array(
        'label'   => 'UI Content Background Colour',
        'section' => 'colors',
        'settings'   => 'ui_content_bg',
    ) ) );
	
	
	///// UI Icon Colour
	
	$wp_customize->add_setting('ui_icon',  array(
	        'default' => 'white',
	    )
	);
	$wp_customize->add_control('ui_icon',array(
	        'type' => 'radio',
	        'label' => 'UI Icon Colour',
	        'section' => 'colors',
	        'choices' => array(
	            'white' => 'White',
	            'black' => 'Black',
	        ),
	    )
	);
}
add_action('customize_register', 'freemium_customize');
?>