<?php 
ini_set('display_errors', true);
include("extentions/defines.php");

// function for creating the random string for the unique url
function generate_sufix($length){
	
	// create the charset for the codes and jumble it all up
	$charset = str_shuffle(CHARSET);
	$sufix = substr($charset, 0, $length);

	return $sufix;
}

function str_exists($variable){
	if (isset($variable) && $variable != '' && strlen($variable) > 0) {
		return true;
	}
	return false;
}
function validate_url($url){
	if (filter_var($url, FILTER_VALIDATE_URL) === true) {
		return $url;
	} else {
		return $url;
	}
}