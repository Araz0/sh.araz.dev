<?php 
ini_set('display_errors', true);

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
function valid_url($url){
	//https://websolutionstuff.com/post/how-to-validate-url-in-php-with-regex
	$regex = "((https?|ftp)\:\/\/)?";
	$regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?";
	$regex .= "([a-z0-9-.]*)\.([a-z]{2,3})";
	$regex .= "(\:[0-9]{2,5})?";
	$regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?";
	$regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?";
	$regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?";

	if (preg_match("/^$regex$/i", $url)) {
		return true;
	}
	return false;
}