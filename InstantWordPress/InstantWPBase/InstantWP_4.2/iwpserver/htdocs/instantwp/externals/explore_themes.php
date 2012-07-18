<?php

// load the instantwp functions
include '../functions.php';

$wp = $_GET['wp'];
if( ISSET($wp) ){
	// sanitise
	$wp  = str_replace ('..','',$wp );  
	$wp  = str_replace ('/','',$wp );  
	if (preg_match('/wordpress/i', $wp)) {
		exec('"'.$base_dir.'\iwpserver\htdocs\instantwp\bat\explore_themes.bat" '.$wp);
	}
}
header('Location: http://'.$base_url.'/instantwp/index.php');

?>