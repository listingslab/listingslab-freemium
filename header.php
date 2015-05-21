<?php 
$config = array ();
$default_icon = get_template_directory_uri().'/img/png/system/add_logo.png';
$config['icon'] = get_theme_mod ('icon', $default_icon);
//print '<pre>';
//print_r ($link_colour);
//print '</pre>';

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">	
	<?php include 'php/metatags.php'; ?>
	<?php include 'php/javascript.php'; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wordpress/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<link rel="shortcut icon" href="<?php print $config['icon']; ?>" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	
	<?php include 'php/css.php'; ?> ?>

</head>
<body <?php body_class(); ?>>
<?php include 'php/google_analytics.php'; ?>
<div id="FREEmium">	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<div id="sidebar" class="sidebar">
		
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					//'/?clicked=icon'
					$icon_link = esc_url(home_url());
					$icon = $config['icon'];
					if (strpos ($icon,'add_logo.png') !== false) {
					    $icon_link = get_admin_url().'admin.php?page=FREEmium';
					}
				?>
				<div class="site-icon">
					<a href="<?php print $icon_link; ?>" rel="home" target="_self">
						<img id="icon" src="<?php print $icon;?>" />
					</a>
				</div>
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div>
		</header>
		<?php get_sidebar(); ?>
	</div>
	<div id="content" class="site-content">
	<div id="message"></div>
	