<?php
/**
 * get_desc () Get a shortened version of the page content.
 *
 * @since FREEmium 3
 */
if ( ! function_exists( 'get_desc' ) ) :
	function get_desc () {
		$post = get_post (get_the_ID (), ARRAY_A);
		$desc = $post['post_content'];
		$desc = do_shortcode($desc);
		$desc = strip_tags($desc);
		if (strlen($desc) >= 700) {
		    $ret = substr($desc, 0, 700).'';
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