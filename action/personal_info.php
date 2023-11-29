<?php
session_start();
include('include/header.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Obtener y mostrar información personal del usuario desde la base de datos
$hostname = 'localhost';
$username = 'root';
$database = 'auth';
$password = '';
$port = 4000;

try {
    $mysqli = new mysqli($hostname, $username, $password, $database, $port);
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    // Obtener información personal del usuario
    $user_id = $_SESSION['user_id'];
    $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE id = ?");
    if (!$stmt) {
        die('Error al preparar la consulta: ' . $mysqli->error);
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Mostrar información personal del usuario
        echo '<div>';
        echo '<h1>Información Personal</h1>';
        echo '<p>CHANGE PHOTO: ' . $usuario['foto'] . '</p>';
        echo '<p>Nanem: ' . $usuario['nombre'] . '</p>';
        echo '<p>Bio: ' . $usuario['email'] . '</p>';
        echo '<p>Phone: ' . $usuario['telefono'] . '</p>';
        echo '<p>Email: ' . $usuario['email'] . '</p>';
        echo '<p>Password: ' . $usuario['password'] . '</p>';
        // Puedes mostrar más información aquí según tu esquema de base de datos
        echo '</div>';
    } else {
        echo 'Usuario no encontrado.';
    }

    $stmt->close();
    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    echo 'Error: ' . $e->getMessage();
}

include('include/footer.php');
?>
