<?php
/**
 * get_short_content() Get a shortened version of the content
 * by $id and specifying the length
 *
 * @since FREEmium 3
 */
if ( ! function_exists( 'get_short_content' ) ) :
	function get_short_content ($id, $length) {
		$post = get_post ($id, ARRAY_A);
		$desc = $post['post_content'];
		$desc = do_shortcode($desc);
		$desc = strip_tags($desc);
		if (strlen($desc) >= $length) {
		    $ret = substr($desc, 0, $length).'...';
		}else {
		    $ret = $desc;
		}
		if ($ret == ''){
			$ret = get_bloginfo ( 'name' ) . ', ' . get_bloginfo ( 'description' );
		}
		return trim ($ret);
	}
endif;
?>