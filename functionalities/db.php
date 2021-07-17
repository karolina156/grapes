<?php

$host = "eu-cdbr-west-03.cleardb.net";
$user = "bb6dbece46b509";
$password = "68f85b07";
$dbName = "heroku_ace47564f810347";



$connection = mysqli_connect($host, $user, $password, $dbName);
$connection -> set_charset("utf8");

if(!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


?>