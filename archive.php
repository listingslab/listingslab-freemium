<?php get_header(); ?>
<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article>
				<header class="entry-header">
<h1 class="entry-title">			
<?php
	print get_the_archive_title();
?>
</h1>
<h2>			
<?php
	print get_the_archive_description();
?>
</h2>
</header>

<div class="accordion">	
		<?php if ( have_posts() ) : ?>
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
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
		
		</main><!-- .site-main -->
	</section><!-- .content-area -->
</article>
<?php get_footer(); ?>
