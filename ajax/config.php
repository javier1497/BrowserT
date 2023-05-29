<?php

date_default_timezone_set("America/Bogota");

//$server = 'http://192.99.169.137/venta';
$server = 'http://localhost:8080/pronostico';
//$api_archivo = 'http://localhost:8091/venta/api/subirarchivo.php';

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pronostico";
$mysqli = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);