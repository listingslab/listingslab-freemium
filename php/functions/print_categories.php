<?php
/**
 * print_categories () Print categories.
 *
 * @since FREEmium 4
 */
if ( ! function_exists( 'print_categories' ) ) :
	function print_categories () {
	$ret = '';
	$post = get_post (get_the_ID (), ARRAY_A);
	$html = '';
	$html .= '<div id="_categories">';
	$categories = get_the_category(get_the_ID ());
	foreach ($categories as $category) {
		//get_option( 'tag_base' );
		//get_option( 'category_base' );
		$html .= '<a class="btn_category" href="'.get_category_link($category->term_id).'">';
		$html .= $category->cat_name;
		//$html .= get_site_url().'/'.get_option( 'category_base' );
		//$html .= '/';
		//$html .= $category->slug;
		//$html .= $category->cat_name;
		$html .= '</a>';
		$html .= ', ';
		/*
		 * $category->term_id
			$category->name
			$category->slug
			$category->term_group
			$category->term_taxonomy_id
			$category->taxonomy
			$category->description
			$category->parent
			$category->count
			$category->cat_ID
			$category->category_count
			$category->category_description
			$category->cat_name
			$category->category_nicename
			$category->category_parent
		 * 
		 */
	}
	$html .= '</div>';
	return trim ($html);
}
endif;
?>