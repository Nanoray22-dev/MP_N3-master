<?php

$host = 'localhost';
$dbname = 'auth';
$user = 'root';
$password = '';
$port = 8111;

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>