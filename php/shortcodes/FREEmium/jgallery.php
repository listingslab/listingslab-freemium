<?php
	remove_shortcode( 'gallery' );
	add_shortcode ('gallery', 'Shortcode_jgallery');
	function Shortcode_jgallery ($atts, $content = null) {
		$output = '';
		$ids = $atts ['ids'];
		if ($ids != ''){
			$img_arr = explode(",",$ids);
			$output .= '<link rel="stylesheet" type="text/css" media="all" href="'.get_template_directory_uri().'/js/jgallery/css/font-awesome.min.css" />';
			$output .= '<link rel="stylesheet" type="text/css" media="all" href="'.get_template_directory_uri().'/js/jgallery/css/jgallery.min.css" />';
			$output .= '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jgallery/js/tinycolor-0.9.16.min.js"></script>';
			$output .= '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jgallery/js/jgallery.min.js"></script>';
			$output .= '<script type="text/javascript" src="'.get_template_directory_uri().'/js/jgallery.js"></script>';
			$output .= '<div class="FREEmium_jgallery_wrapper">';
			$output .= '<div class="FREEmium_jgallery">';
			$output .= '<div class="album" data-jgallery-album-title="FREEmium">';
			for ($i=0; $i < count ($img_arr); $i++){
				$img_full = wp_get_attachment_image_src ($img_arr[$i], 'full');
				$img_full = $img_full [0];
				$img_thumb = wp_get_attachment_image_src ($img_arr[$i]);
				$img_thumb = $img_thumb [0];
				$img_alt = get_the_title($img_arr[$i]);
				$output .= '<a href="'.$img_full.'"><img src="'.$img_thumb.'" alt="'.$img_alt.'" data-jgallery-bg-color="#000" data-jgallery-text-color="#fff" /></a>';
			}
			$output .= '</div></div></div>';
		}else{
			$output = 'No Image ids set';
		}
		return $output;
	}