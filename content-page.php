<?php /* Listingslab FREEmium WordPress Theme */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div id="page_title">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
		<?php if($post->post_parent) {
			$parent_link = get_permalink($post->post_parent); ?>
		<a id="up" href="<?php echo $parent_link; ?>">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/up.png" />
		</a>
		<?php } ?>
		<a href="?show=related_pages" id="related_button" title="More like this">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/more.png" />
		</a>	
		<?php include 'php/related_pages.php'; ?>
		<?php print_r (print_categories()); ?>
		<div style="clear:both;"></div>
	</div>
	
	<div class="entry-content">
		<!--<div id="thumb">
			<?php //listingslab_post_thumbnail(); ?>
		</div>-->
		<div style="clear:both;"></div>
		
		<?php the_content(); ?>
	</div>
	<?php include 'php/banner.php'; ?>
	<div id="insert"></div>
</article>
