<?php
	$meta = array ();
	$meta ['apikey'] = 'apikey-public-9257-0013';
	$my_theme = wp_get_theme();
	$meta ['version'] = $my_theme->get( 'Version' );
	$meta ['thisurl'] = thisurl ();
	$meta ['geo_region'] = 'australia';
	$meta ['geo_placename'] = 'Port Noarlunga';
	$meta ['geo_position'] = '-35.149773;138.470782;138.470782';
	$meta ['geo_ICBM'] = '-35.149773;138.470782, 138.470782';
	$meta ['image'] = '';
	$meta ['post_id'] = get_the_ID ();
	if ($meta ['post_id']){
		$thumb = wp_get_attachment_image_src (get_post_thumbnail_id ($post->ID), 'thumbnail' );
		$meta ['image'] = $thumb['0'];
	}
	if ($meta ['image'] == ''){
		$meta ['image'] = get_template_directory_uri().'/png/FREEmium_icon.png';
	}
	$meta ['author'] = 'listingslab';
	$meta ['sitename'] = get_bloginfo ( 'name' ). ', ' . get_bloginfo ( 'description' );
	$meta ['desc'] = get_desc ();
	$meta ['title'] = get_the_title ();
	$meta ['keywords'] = 'listingslsab, jquery, jqueryui, javascript, software, web apps, ';
	$posttags = get_the_tags();
	if ($posttags) {
	  foreach($posttags as $tag) {
	    $meta ['keywords'] .= $tag->name . ', '; 
	  }
	}
?>
	
	
	<meta property="FREEmium:apikey" content="<?php print $meta ['apikey']; ?>" />
	<meta property="FREEmium:version" content="<?php print $meta ['version']; ?>" />
	<meta property="FREEmium:title" content="<?php print $meta ['title']; ?>" />
	
	<meta name="keywords" content="<?php print $meta ['keywords']; ?>" />
	<meta name="Description" content="<?php print $meta ['desc']; ?>" />
	<meta name="Author" content="<?php print $meta ['author']; ?>" />
	<meta name="Generator" content="<?php print $meta ['author']; ?>" />
	
	<meta itemprop="name" content="<?php print $meta ['sitename']; ?>" />
	<meta itemprop="description" content="<?php print $meta ['desc']; ?>" />
	<meta itemprop="image" content="<?php print $meta ['image']; ?>" />
	
	<meta property="og:title" content="<?php print $meta ['title']; ?>" />
	<meta property="og:site_name" content="<?php print $meta ['sitename']; ?>" />
	<meta property="og:type" content="company" />
	<meta property="og:url" content="<?php print $meta ['thisurl']; ?>" />
	<meta property="og:image" content="<?php print $meta ['image']; ?>" />
	
	<link rel="apple-touch-icon" href="<?php print $meta ['image']; ?>"/>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php print $meta ['image']; ?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php print $meta ['image']; ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php print $meta ['image']; ?>" />
	
	<meta name="geo.region" content="<?php print $meta ['geo_region']; ?>" />
	<meta name="geo.placename" content="<?php print $meta ['geo_placename']; ?>" />
	<meta name="geo.position" content="<?php print $meta ['geo_position']; ?>" />
	<meta name="ICBM" content="<?php print $meta ['geo_ICBM']; ?>" />