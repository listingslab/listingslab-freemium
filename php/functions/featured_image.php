<?php
if ( ! function_exists( 'featured_image' ) ) :
	function featured_image ($id, $case) {
		$ret = '';
		$class = 'thumb_img';
		if ($case == 'shortcode_blog'){
			$class = 'shortcode_blog_img';
		}
		$thumb = wp_get_attachment_image_src (get_post_thumbnail_id ($id), 'medium' );
		$thumb_url = $thumb['0'];
		$url = get_permalink ($id);
		if ($thumb_url != '') {
			$ret .= '<a href="'.$url.'">';
			$ret .= '<img class="'.$class.'" src="'.$thumb_url.'" />';
			$ret .= '</a>';
		}
		return $ret;
	}
endif;
function is_file_exists ($filePath) {
	return is_file ($filePath) && file_exists ($filePath);
}
?>