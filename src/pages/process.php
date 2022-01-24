<?php
include("extentions/defines.php");
include("extentions/functions.php");
include("extentions/sql_functions.php");

$sufix = $_GET['sufixField'];
$og_url = $_GET['ogUrlField'];

$result = getUrl($sufix);
if (isset($result->sufix)) {
    array_push($logs, "Sufix already in database!");
}
if (valid_url($og_url) == false) {
    array_push($logs, "URL is not valid!");
}
// Finally, register entry if there are no errors in the form
if (count($logs) == 0) {
    insertUrl($sufix, $og_url, 0, date('Y-m-d H:i:s'), true);
    array_push($logs, "short url has been added");
}else{
    array_push($logs, "failed.");
}
$data['logs'] = $logs;
$sh['sufix'] = $sufix;
$sh['og_url'] = $og_url;
$data['result'] = $sh;

echo json_encode($data, JSON_PRETTY_PRINT);

