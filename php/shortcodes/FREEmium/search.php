<?php
	add_shortcode ('FREEmium-search', 'Shortcode_search');
	//
	function Shortcode_search ($atts, $content = null) {
		$output = '<div class="FREEmium_search">';
		$output .= get_search_form (false);
		$output .= '</div>';
		$output .= '';
		return $output;
	}