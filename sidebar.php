
<div id="secondary" class="secondary">
	
	<div id="FREEmium_nav">
		<?php if ( is_active_sidebar( 'side_top' ) ) : ?>
				<?php dynamic_sidebar( 'side_top' ); ?>
		<?php endif; ?>
		<a class="laptop" href="?show=menu&action=laptop_click" title="Open the Admin Menu">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/laptop.png" />
		</a>
		<!--<a href="/wp-admin/admin.php?page=OSFrontend" class="btn_osfrontend" title="OSFrontend">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/osfrontend.png" />
		</a>-->
		<a href="?show=search" id="btn_search" title="Search this site">
			<img src="<?php print get_template_directory_uri(); ?>/img/png/system/search.png" />
		</a>
	</div>
	<?php if ( has_nav_menu( 'primary' ) || is_active_sidebar( 'side_top' )  ) { ?>
			<?php if (has_nav_menu ('primary')) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php
						wp_nav_menu( array(
							'menu_class'     => 'nav-menu',
							'theme_location' => 'primary',
						));
					?>
				</nav>
			<?php }?>	
			
	<?php }else{ ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
			    	<li id="menu-item-1" class="menu-item"><a href="<?php print get_admin_url(get_current_blog_id()); ?>nav-menus.php">Setup Main Menu</a></li>
			</nav>
	<?php }; ?>
</div>