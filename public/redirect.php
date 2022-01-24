<?php
include("extentions/functions.php");
include("extentions/sql_functions.php");

if (str_exists($_GET['sufix'])) {
    $result = getUrl($_GET['sufix']);
    if (isset($result->og_url)) {
        header("Location: " . $result->og_url);
    }else{
        echo $_GET['sufix']." can not be found";
    }
    
}