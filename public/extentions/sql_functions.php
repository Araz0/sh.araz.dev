<?php 
ini_set('display_errors', true);
require "extentions/config.php";
include "extentions/config.php";
function insertUrl($sufix, $og_url, $user_id, $expiration_date, $is_active){
    global $pdo;
    $dateNow = date('Y-m-d H:i:s');
    $count = 0;
    $query = "INSERT INTO urls (sufix, og_url, user_id, count, creation_date, expiration_date, is_active) VALUES (:sufix, :og_url, :user_id, :count, :creation_date, :expiration_date, :is_active)";
    $sth = $pdo->prepare($query);
    $sth->bindParam('sufix', $sufix, PDO::PARAM_STR);
    $sth->bindParam('og_url', $og_url, PDO::PARAM_STR);
    $sth->bindParam('user_id', $user_id, PDO::PARAM_INT);
    $sth->bindParam('count', $count, PDO::PARAM_INT);
    $sth->bindParam('creation_date', $dateNow, PDO::PARAM_STR);
    $sth->bindParam('expiration_date', $expiration_date, PDO::PARAM_STR);
    $sth->bindParam('is_active', $is_active, PDO::PARAM_BOOL);
    $sth->execute();
}

function getUrl($sufix) {
    global $pdo;
    $query = "SELECT * FROM urls WHERE sufix=?";
    $sth = $pdo->prepare($query);
    $sth->execute(array($sufix));
    return $sth->fetch();
}