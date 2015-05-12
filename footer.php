<?php /* Listingslab FREEmium WordPress Theme */ ?>
	<?php include 'php/laptop_menu.php'; ?>
	<div id="nav_search" title="Search <?php bloginfo( 'name' ); ?>">
		<?php get_search_form(); ?>
	</div>
	<?php //include 'php/cookies.php'; ?>
	<div class="wordpress_widgets">
	<?php if ( is_active_sidebar( 'admin_widgets' ) ) : ?>
			<?php dynamic_sidebar( 'admin_widgets' ); ?>
	<?php endif; ?>
</div>
	</div>
</div>
<?php wp_footer(); ?>
</div>
<div id="preloader">
	<img src="<?php print get_template_directory_uri(); ?>/img/gif/circle.gif" />
</div>
</body>
</html>
