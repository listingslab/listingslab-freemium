<?php
	add_shortcode ('FREEmium-blog', 'Shortcode_blog');
	function Shortcode_blog ($atts, $content = null) {
		$inline_style = '';
		if (isset($atts ['width'])){
			if ($atts ['width'] != ''){
				$inline_style .= ' width: ' . $atts ['width'] . ';';
			}
		}
		if (isset($atts ['align'])){
			if ($atts ['align'] == 'left'){
				$inline_style .= ' float:left; margin-right:15px;';
			}
			if ($atts ['align'] == 'right'){
				$inline_style .= ' float:right; margin-left:15px;';
			}
		}	
		$html = '<div class="FREEmium_blog" style="'.$inline_style.'">';
		$title = '';
		if (isset($atts ['title'])){
			$title = $atts ['title'];
		}
		if ($title != ''){
			$html .= '<h2>';
			$html .= $title;
			$html .= '</h2>';
		}
		$number = 5;
		if (isset($atts ['number'])){
			$number = intval($atts ['number']);
			if ($number == 0){
				$number = 5;
			}
		}
		$tag = '';
		if (isset($atts ['tag'])){
			$tag = $atts ['tag'];
		}
		$category = '';
		if (isset($atts ['category'])){
			$category = $atts ['category'];
		}else{
			$category = '';
		}
		$args = array(
			'posts_per_page'   => $number,
			'offset'           => 0,
			'tag' 			   => $tag,
			'category'         => $category,
			'category_name'    => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$the_posts = get_posts( $args );
		$html .= '<div class="blog_acc">';
		for ($i=0; $i< count ($the_posts) ; $i++){
			$html .= '<h3>'.$the_posts[$i]->post_title.'</h3>';
			$html .= '<div>';
			
			$html .= featured_image ($the_posts[$i]->ID, 'shortcode_blog');
			$html .= get_short_content ($the_posts[$i]->ID, 350);
			$html .= '<div style="clear:both;"></div>';
			$html .= '<a class="shortcode_blog_btn" href="'.get_permalink($the_posts[$i]->ID).'">';

			$html .= 'READ';
			$html .= '</a>';
			$html .= '</div>';
		}
		$html .= '</div>';
		$html .= '</div>';
		$output = $html;
		return $output;
	}