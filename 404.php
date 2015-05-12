<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="entry-title">
						<img align="left" width="100" src="<?php print get_template_directory_uri().'/img/png/3rdparty/github/web-jedi-octocat.png'; ?>" />
						Stop. This is not the web page you're looking for. 
					</h1>
					<p>Or nothing was found. Either way, there's nothing to show you, so why 
						not try another search or browse by category or keyword</p>
				
				<?php get_search_form(); ?>
					
					<div class="wp-links wp-categories">
						<?php wp_list_categories(); ?>
					</div>
					<div class="wp-links wp-keywords">
						<h3>Keywords</h3>
						<?php wp_tag_cloud(); ?>
					</div>
					
					
					<div style="clear:both; height: 0px;"></div>
				</header>
			</section>
		</main>
	</div>
<?php get_footer(); ?>