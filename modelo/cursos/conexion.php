<?php

$localhost ="bfcbdvyi6ggtzay9cgor-mysql.services.clever-cloud.com";
$username = "ul2al2uqhs423cdd";
$password = "5CIsbSldPfe9YeAlC7ZW";
$database = "bfcbdvyi6ggtzay9cgor";  

$mysqli = new mysqli($localhost, $username,$password, $database);

if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

?>