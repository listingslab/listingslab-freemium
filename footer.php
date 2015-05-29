<?php /* Listingslab FREEmium WordPress Theme */ ?>
	<?php include 'php/laptop_menu.php'; ?>
	<div id="nav_search" title="Search <?php bloginfo( 'name' ); ?>">
		<?php get_search_form(); ?>
	</div>
	<?php //include 'php/cookies.php'; ?>
	
	</div>
</div>
<?php wp_footer(); ?>
</div>
<div id="preloader">
	<!-- http://preloaders.net -->
	<?php 		
		$animations = array(
			"loader_android.GIF",
			"loader_android.GIF"
		);
		//"loader_android.GIF",
		//"loader_apple.GIF",
		//"loader_camera.GIF", 
		//"loader_cat.GIF", 
		//"loader_coffee.GIF",
		//"loader_facebook.GIF", 
		//"loader_fancypants.GIF",
		//"loader_foot.GIF", 
		//"loader_heart.GIF", 
		//"loader_mail.GIF", 
		//"loader_skype.GIF", 
		//"loader_twitter.GIF"
		$rand_keys = array_rand($animations, 2);
		$random_animation = $animations[$rand_keys[0]] . "\n";
	?>
	<a href="?click=heartbeat">
	<img src="<?php print get_template_directory_uri(); ?>/img/gif/<?php print $random_animation; ?>" />
	</a>
</div>
</body>
</html>
