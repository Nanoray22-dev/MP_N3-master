<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$database = 'auth';
$password = '';
$port = 8111;

try {
    $mysqli = new mysqli($hostname, $username, $password, $database, $port);
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    
    $user_id = $_GET['id'];
    $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE id = ?");
    
    if (!$stmt) {
        die('Error al preparar la consulta: ' . $mysqli->error);
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if ($data) {
            header('Location: ../User/edit_info.php');
            exit;
        } else {
            echo 'Usuario no encontrado.';
        }
    } else {
        echo 'Usuario no se ha encontrado.';
    }

    $stmt->close();
    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
