<?php
	// Listingslab Open Source
	global $o;
	$dialog_title = get_bloginfo('name'). '';
	if ( !is_user_logged_in() ) {$dialog_title = 'Please login to '.get_bloginfo('name');} 
?>
<div id="laptop_menu" title="<?php print $dialog_title; ?>">
	<a name="_admin_menu"></a>
	<?php 
		if ( is_user_logged_in() ) { 
		    global $current_user, $blog;
		    get_currentuserinfo();
		    $adminlink = get_admin_url(get_current_blog_id());
		    $template_path = get_template_directory_uri();
	?>
	<div id="laptop_menu_left">
		
		<h5>Hi <?php print $current_user->display_name; ?>,</h5>
		<?php edit_post_link('Edit this content'); ?>
		
		
		<h5>Add Content</h5>
		<a class="laptop_menu" href="<?php print $adminlink; ?>post-new.php?post_type=page">New Page</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>post-new.php">New Post</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>post-new.php?post_type=product">New Product</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>import.php">Import</a>
		
		
		
		
	</div>
	<div id="laptop_menu_right">
		<h5>Site Settings</h5>
		<a class="laptop_menu" href="<?php print $adminlink; ?>admin.php?page=FREEmium">FREEmium</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>admin.php?page=OSFrontend">OSFrontend</a>
		
		<h5>Manage</h5>
		<a class="laptop_menu" href="<?php print $adminlink; ?>customize.php">Customize</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>plugins.php">Plugins</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>nav-menus.php">Menus</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>widgets.php">Widgets</a>
		<a class="laptop_menu" href="<?php print $adminlink; ?>themes.php">Change Theme</a>
		<?php print '<a href="'.wp_logout_url().'" class="laptop_menu" title="Logout, '.$current_user->user_login.'" id="gui_logout">Logout</a>'; ?>
		
	</div>
	<?php }else{ wp_login_form();}?>
	<div style="clear:both; height: 10px;"></div>
	<div id="version">
		<a href="https://github.com/listingslab/listingslab-freemium" title="This theme is FREE and Open Source on GitHub" target="_blank">	
			<img height="20" width="20" vspace="5" hspace="5" align="left" src="<?php print get_template_directory_uri(); ?>/img/png/3rdparty/github/github.png" />
		</a>
		<small><i>FREEmium WordPress Theme vs <b><?php $t = wp_get_theme(); print $t->get( 'Version' ); ?></b>. 
		Served by <b><?php print get_server (); ?></b></i></small>
	</div>
</div>