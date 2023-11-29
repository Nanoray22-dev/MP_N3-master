<?php



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash de la contraseña con password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario en la base de datos
    $hostname = 'localhost';
    $username = 'root';
    $database = 'auth';
    $password_db = '';
    $port = 4000;

    try {
        $mysqli = new mysqli($hostname, $username, $password_db, $database, $port);
        if ($mysqli->connect_error) {
            die('Connection failed: ' . $mysqli->connect_error);
        }

        // Insertar el nuevo usuario en la base de datos
        $stmt = $mysqli->prepare("INSERT INTO usuario (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $hashed_password);
        $stmt->execute();
        $stmt->close();

        // Redirigir a login.php
        header('Location: login.php');
        exit;
    } catch (mysqli_sql_exception $e) {
        echo 'Error: ' . $e->getMessage();
    } finally {
        $mysqli->close();
    }
// }

?>




