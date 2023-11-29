<?php
$hostname = 'localhost';
$username = 'root';
$database = "auth";
$password = '';
$port = 4000;



try {
    $mysqli = new mysqli($hostname, $username, $password,$database,$port);
} catch (mysqli_sql_exception $e) {
    echo  "Error: " . $e->getMessage();
}


?>