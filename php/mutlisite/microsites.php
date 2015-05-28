	<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	ini_set('display_errors', '0');
	header('Content-Type: text/html; charset=Windows-1252');
	$html = '';
	$getvars = array ();
	$html .= '<div class="_the_microsites">
	';
	$site_info = array ();
	$db = mysql_connect('50.56.52.139', 'HAL', '9000');
	mysql_select_db('lw_wordpress', $db);
	$theSQL = "SELECT * FROM lw_blogs ORDER BY last_updated DESC;";
	$data = mysql_query($theSQL , $db) or die(mysql_error());
	do{
		if (isset ($arr)){
			$temp = array ();
			$temp ['bloginfo'] = $arr;
			$table_name = "lw_".$arr['blog_id']."_options";
			if ($arr['blog_id'] == 1){
				$table_name = "lw_options";
			}
			$blognameSQL = "SELECT * FROM ".$table_name." WHERE option_name = 'blogname' LIMIT 0,1;";
			$blognameDB = mysql_query($blognameSQL , $db) or die(mysql_error());
			$blogname = mysql_fetch_assoc($blognameDB);
			$blogname = $blogname['option_value'];
			$temp ['blogname'] = $blogname;
			$blogdescriptionSQL = "SELECT * FROM ".$table_name." WHERE option_name = 'blogdescription' LIMIT 0,1;";
			$blogdescriptionDB = mysql_query($blogdescriptionSQL , $db) or die(mysql_error());
			$blogdescription = mysql_fetch_assoc($blogdescriptionDB);
			$blogdescription = $blogdescription['option_value'];
			$temp ['blogdescription'] = $blogdescription;
			$poststable = "lw_".$arr['blog_id']."_posts";
			if ($arr['blog_id'] == 1){
				$poststable = "lw_posts";
			}
			$latestpostSQL = "SELECT * FROM ".$poststable." ORDER BY post_modified DESC LIMIT 0,1;";
			$latestpostDB = mysql_query($latestpostSQL , $db) or die(mysql_error());
			$latestpostDB = mysql_fetch_assoc($latestpostDB);
			$temp ['latestpost_title'] = $latestpostDB['post_title'];
			$temp ['latestpost_body'] = strip_tags ($latestpostDB['post_content']);
			$temp ['latestpost_url'] = $latestpostDB['guid'];
			$current_themeSQL = "SELECT * FROM ".$table_name." WHERE option_name = 'current_theme' LIMIT 0,1;";
			$current_themeDB = mysql_query($current_themeSQL , $db) or die(mysql_error());
			$current_theme = mysql_fetch_assoc($current_themeDB);
			$current_theme = $current_theme['option_value'];
			$temp ['theme'] = $current_theme;
			$listingslab_optionsSQL = "SELECT * FROM ".$table_name." WHERE option_name = 'listingslab_options' LIMIT 0,1;";
			$listingslab_optionsDB = mysql_query($listingslab_optionsSQL , $db) or die(mysql_error());
			$listingslab_options = mysql_fetch_assoc($listingslab_optionsDB);
			$listingslab_options = $listingslab_options['option_value'];
			$temp ['listingslab_options'] = unserialize ($listingslab_options);
			$_2014_optionsSQL = "SELECT * FROM ".$table_name." WHERE option_name = '_2014_options' LIMIT 0,1;";
			$_2014_optionsDB = mysql_query($_2014_optionsSQL , $db) or die(mysql_error());
			$_2014_options = mysql_fetch_assoc($_2014_optionsDB);
			$_2014_options = $_2014_options['option_value'];
			$temp ['_2014_options'] = unserialize ($_2014_options);
			$site_info[] = $temp;
		}
	} while ($arr = mysql_fetch_assoc($data));
	//for ($i=0; $i< 8; $i++){
	for ($i=0; $i<count($site_info); $i++){
		$add_site = true;
		if ($site_info[$i]['bloginfo']['deleted'] == 1){
				$add_site = false;
		}
		if ($add_site){
			$_url = 'http://' . $site_info[$i]['bloginfo']['domain'].$site_info[$i]['bloginfo']['path'];
			
			$html .= '<div class="panel"><div class="pad10">';
			
			$html .= '<div class="_microsite" id="_site_'.$site_info[$i]['bloginfo']['blog_id'].'">';
			$html .= '<div class="_ms_pad">';
			$html .= '<div class="_ms_bloginfo">';
			$pic = 'http://living-websites-cloud.eu/wp-content/uploads/2014/10/Anonymous.png';
			if ($site_info[$i]['_2014_options']['_icon'] != ''){
				$pic = $site_info[$i]['_2014_options']['_icon'];
			}
			if ($site_info[$i]['listingslab_options']['icon'] != ''){
				$pic = $site_info[$i]['listingslab_options']['icon'];
			}
			if ($pic != ''){
				$html .= '<a target="_blank" href="http://'.$site_info[$i]['bloginfo']['domain'].$site_info[$i]['bloginfo']['path'] . '">';
				$html .= '<img title="go to site" src="' . $pic . '" class="icon50_r" title="This is the blog icon" />';
				$html .= '</a>';
			}
			$html .= '<b><a target="_blank" href="http://'.$site_info[$i]['bloginfo']['domain'].$site_info[$i]['bloginfo']['path'] . '">';
			$html .= $site_info[$i]['blogname'];
			$html .= '</a></b>';
			$html .= '<p>';
			$html .= $site_info[$i]['blogdescription'] . ', <em>'.$site_info[$i]['latestpost_title'] . '</em>';
			$html .= '</p>';
			$html .= '</div>';
			$html .= '<div class="_ms_latest_post" id="more_'.$site_info[$i]['bloginfo']['blog_id'].'">';
			$html .= '<div style="clear:both;"></div>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div></div>';
			$html .= '		
			';
		}
	}
	$html .= '<div style="clear:both;"></div>';
	$html .= '</div>';
	print_r ($html);
?>