<?php /* Listingsab Themes functionality */
 	$themes = array ();
	$default = 'universal';
	$new_theme = array ();
	$new_theme ['title'] = 'One size fits all';
	$new_theme ['name'] = 'universal';
	
	$new_theme ['ui_btn_active'] = 'purple';
	$new_theme ['ui_btn_default'] = 'red';
	$new_theme ['ui_btn_over'] = 'blue';
	$new_theme ['ui_btn_text'] = 'white';
	
	$new_theme ['icon'] = get_theme_mod ('icon', get_template_directory_uri().'/img/png/anonymous.png');
	$new_theme ['header'] = get_theme_mod ('header_colour', '#000000');
	$new_theme ['htags'] = get_theme_mod ('htags_colour', '#000000');
	$new_theme ['border'] = get_theme_mod ('border_colour', '#000000');
	$new_theme ['links'] = get_theme_mod ('link_colour', '#000000');
	$new_theme ['text'] = get_theme_mod ('text_colour', '#000000');
	$new_theme ['sidebar'] = get_theme_mod ('sidebar_text_colour', '#000000');
	$themes [$new_theme ['name']] = $new_theme;
	
	
	
	
	
	
	
	
	
	$new_theme = array ();
	$new_theme ['title'] = 'Listingslab\'s own brand';
	$new_theme ['name'] = 'listingslab';
	$new_theme ['header'] = '#00688b';
	$new_theme ['dark'] = '#00688b';
	$new_theme ['border'] = '#00688b';
	$new_theme ['links'] = '#00b2ee';
	$new_theme ['text'] = get_theme_mod ('text_colour', 'black');
	$new_theme ['light_bg'] = '#3299cc';
	$themes [$new_theme ['name']] = $new_theme;
	
	$FREEmium ['theme'] =  $themes[$default];
 
?>