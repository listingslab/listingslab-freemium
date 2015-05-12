<?php get_header(); ?>
	<div class="search_title" style="margin-top:50px;margin-bottom:50px;">
			<h1>
				<?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?>
			</h1>
	</div>
		<div class="entry-content">
		<?php if ( have_posts() ) : ?>
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
			// End the loop.
			endwhile;
			// Previous/next page navigation.
			//the_posts_pagination();
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div>
<?php get_footer(); ?>
