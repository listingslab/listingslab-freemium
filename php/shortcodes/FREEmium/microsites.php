<?php
	add_shortcode ('FREEmium-microsites', 'Shortcode_microsites');
	function Shortcode_microsites ($atts, $content = null) {
		$html = '';
		$html .= '<script type="text/javascript" src="'.get_template_directory_uri().'/js/FREEmium_Shortcodes/microsites.js"></script>';
		$html .= '<div id="sc_microsites"><div class="padded">';
		$html .= '<h2>Living Websites Cloud</h2>';
		$html .= '<p>Create a list of the MicroSites on LWC</p>';
		$html .= '</div></div>';
		return $html;
	}