<?php
if ( ! function_exists( 'get_server' ) ) :
function get_server () {
	$served_by = $_SERVER['SERVER_ADDR'];
	if ( $served_by == '10.208.131.49'){
		$served_by = 'Foxtrot';
	}else if ($served_by == '10.177.6.61'){
		$served_by = 'Oscar';
	}else if ($served_by == '::1'){
		$served_by = 'Localhost';
	}
	return $served_by;
}
endif;
?>