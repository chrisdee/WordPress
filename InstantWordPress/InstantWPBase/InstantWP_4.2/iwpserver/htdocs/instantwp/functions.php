<?php

// set the base url for all scripts
$base_url = $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];

// set the base directory for all scripts
$current_folder = dirname(__FILE__);
$base_dir = dirname(dirname(dirname($current_folder)));

// Load Configuration file

function load_config($dir) {
	$config = parse_ini_file($dir."\system\config\iwp.ini");
	return $config;
}

// config editing functions 

function save_config($config, $dir) {
    	$content = ""; 
    	$path = $dir."\system\config\iwp.ini";
	foreach ($config as $key=>$elem) {
	        $content .= $key." = \"".$elem."\"\n";
	}
	
	if (!$handle = fopen($path, 'w')) {
	    return false;
	}
	if (!fwrite($handle, $content)) {
	    return false;
	}
	fclose($handle);
	return true;
}

function delete_value_config($config, $key) { 
	global $base_dir;
        unset($config[$key]);
        save_config($config, $base_dir);
}

function add_value_config($config, $key, $value) { 
	global $base_dir;
        $config[$key] = $value;
        save_config($config, $base_dir);
}

function overwrite_value_config($config, $key, $new_value) { 
	global $base_dir;
	unset($config[$key]);
        $config[$key] = $new_value;
        save_config($config, $base_dir);
}




?>