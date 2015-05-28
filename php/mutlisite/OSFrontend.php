<?php
/*	
 *  OSFrontend.
*/
	error_reporting(E_ALL);
	ini_set('display_errors', '0');
	//include 'functions.php';
	$OSF ['version'] = '1.0';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php include 'OSF_include.php'; ?>
		<title><?php print_r ($OSF ['title']); ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="<?php print_r ($OSF ['favicon']); ?>">
	</head>
	<body>
		<div id="OSFrontend"><div class="pad10">
			<header>

				<div class="pad10">
					<a href="<?php print_r ($OSF ['this_app']); ?>">
						<img alt="<?php print_r ($OSF ['title']); ?>" id="app_logo" src="<?php print_r ($OSF ['logo']); ?>" />
						<h1><?php print_r ($OSF ['desc']); ?></h1>
					</a>
				<div style="clear:both;"></div>
			</div>
			</header>
				
			<div id="OSF_content">
				<nav></nav>
				
				<div id="_left">
					<?php include 'microsites.php'; ?>
				</div>
				<div id="_right">
					
					<div class="panel"><div class="pad10">
						<h3>Filters</h3>
							
							<ul>
								<li><a href="?filter=">Filter</li>
							</ul>
					<div style="clear:both;"></div></div></div>
				</div>
				<div style="clear:both;"></div>
			</div>
			<footer>
				<div class="pad10">
						<?php print_r ($OSF ['site']); ?> Vs <?php print_r ($OSF ['version']); ?>
				 </div>
			</footer>
		</div></div>
	</body>
</html>