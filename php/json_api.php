<?php
	$all_good = true;
	$mode = 'json';
	$o = array ();
	//$o ['get'] = $_GET;
	//$o ['post'] = $_POST;
	
	/////////////////////////////////////////////////////////
	if ($all_good){
		$o ['success'] = 'yes';
		$o ['response'] = 'display feedback from the server';
	}else{
		$o ['success'] = 'no';
	}
	$o ['time'] = time();
	if ($mode == 'json'){
		print json_encode($o);
	}else{
		print '<pre>';
		print_r ($o);
		print '</pre>';
	}
?>