<?php

$host = '127.0.0.1';
$dbname = 'auth';
$user = 'root';
$password = '';
$port = 3306;

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo "Connecting";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>