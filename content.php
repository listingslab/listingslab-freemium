<?php /* Listingslab FREEmium WordPress Theme */ ?>
<?php if ( is_single() ) : 	?>
<article id="post-<?php the_ID (); ?>" <?php post_class(); ?>>
	<div id="page_title">
<?php	print '<header class="entry-header">';
		the_title ( '<h1 class="entry-title">', '</h1>' );
		print '</header>';?>
<?php
	$up_img = '<img src="'.get_template_directory_uri().'/img/png/system/up.png'.'" />';
	if ( get_option( 'show_on_front' ) == 'page' ) {
		$b = get_permalink ( get_option('page_for_posts' ) );
		print '<a href="'.$b.'" title="'.get_the_title (get_option('page_for_posts' )).'" class="blog_main">';
		print $up_img;
		print '</a>';
	}else{
		print '<a href="'.get_site_url().'" title="'.get_bloginfo('name'). ' Blog" class="blog_main">';
		print $up_img;
		print '</a>';
	}
	print '<div style="clear:both;"></div>';
	else :
?>
<h3><?php print get_the_title (); ?></h3>
<div>
	<?php print featured_image (get_the_ID(), 'shortcode_blog'); ?>
	<div class="desc"><?php print get_desc (); ?></div>
	<div class="read_more">
		<a class="shortcode_blog_btn" href="<?php print get_the_permalink(); ?>" rel="bookmark" title="<?php print get_the_title(); ?>">
		READ
		</a>
	</div>
</div>
<?php
	endif;	
	if ( is_single() ) :
?>
	<div class="entry-content">	
		<?php //print featured_image (get_the_ID(), 'icon_listed'); ?>
		<?php
			//print featured_image();
			the_content();
			//twentyfifteen_entry_meta();
			if ( is_single() ) :
		?>
	</div>
	</div>
	<?php include 'php/banner.php'; ?>
</article>
<?php  endif; endif; ?>