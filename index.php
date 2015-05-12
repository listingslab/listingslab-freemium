<?php
	/* Listingslab FREEmium WordPress Theme	
	by Chris Dorward @listingslab http://listingslab.com */
	error_reporting(E_ALL);ini_set('display_errors', '1');	
	get_header();
?>
	<div id="primary" class="content-area">
		
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) { ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php } ?>

<?php if ( !is_single() ) { 	?>
	<article <?php post_class(); ?>>
		
	<div id="page_title">
		<header class="entry-header">
			<h1 class="entry-title">
		<?php 
			if (get_option( 'show_on_front' ) == 'page') {
				print get_the_title (get_option('page_for_posts'));
			}else{
				print get_bloginfo('name'). ' Blog';
			}
		?>
		</h1>
		</header>
		<!--<a href="?show=related_pages" id="related_button" title="More like this">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/more.png" />
		</a>-->	
		<?php include 'php/related_pages.php'; ?>
		<?php $parent_link = esc_url( home_url('/')); ?>
		<a id="up" href="<?php echo $parent_link; ?>">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/up.png" />
		</a>
		<div style="clear:both;"></div>
	</div>
	<div class="accordion">
<?php }?>
		<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			// End the loop.
			endwhile;
			// Previous/next page navigation.
			//the_posts_pagination();
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	<?php if ( !is_single() ) { 	?>
	</div>
	<?php include 'php/banner.php'; ?>
	</article>
<?php }?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
