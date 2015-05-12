<?php
	add_shortcode ('FREEmium-account', 'Shortcode_account');
	function Shortcode_account ($atts, $content = null) {
		$html = '';
		$html .= '<div class="_account"><div class="_account_pad">';
		$html .= '<b>Your Account</b>';
		$html .= '<script type="text/javascript" src="'.get_template_directory_uri().'/js/FREEmium_Shortcodes/account.js"></script>';
		$html .= '</div></div>';
		return $html;
	}