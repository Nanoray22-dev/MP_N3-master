<?php
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
    echo 'Connection established';
    
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['registro'])) {
            // Registro de usuario
            $nombre = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
            if (!$stmt) {
                die('Error al preparar la consulta: ' . $mysqli->error);
            }
            $stmt->bind_param("sss", $nombre, $email, $password);
            $stmt->execute();
            $stmt->close();

            echo 'Registro exitoso. Ahora puedes iniciar sesión.';
        } elseif (isset($_POST['login'])) {
            // Login de usuario
            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
            if (!$stmt) {
                die('Error al preparar la consulta: ' . $mysqli->error);
            }
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $usuario = $result->fetch_assoc();

                if ($usuario && password_verify($password, $usuario['password'])) {
                    $_SESSION['usuario_id'] = $usuario['id'];
                    echo 'Login exitoso. Bienvenido, ' . $usuario['nombre'] . '!';
                } else {
                    echo 'Credenciales incorrectas. Intenta de nuevo.';
                }
            } else {
                echo 'Usuario no encontrado. Regístrate para crear una cuenta.';
            }

            $stmt->close();
        }
    }

    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
