<?php
session_start();
include('include/header.php');

if (!isset($_SESSION['user_id'])) {
    header('location: index.php');
    exit;
}

$hostname = 'localhost';
$username = 'root';
$database = 'auth';
$password = '';
$port = 4000;

// Verificar si se envió el formulario de edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesamiento del formulario de edición y actualización de la base de datos
    $user_id = $_SESSION['user_id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    // Agrega más campos según tu esquema de base de datos

    try {
        $mysqli = new mysqli($hostname, $username, $password, $database, $port);
        if ($mysqli->connect_error) {
            die('Connection failed: ' . $mysqli->connect_error);
        }

        // Actualizar información del usuario en la base de datos
        $stmt = $mysqli->prepare("UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?");
        if (!$stmt) {
            die('Error al preparar la consulta: ' . $mysqli->error);
        }
        $stmt->bind_param("ssi", $nombre, $email, $user_id);
        $stmt->execute();
        $stmt->close();

        // Puedes agregar más lógica de actualización según tus necesidades

        echo 'Información actualizada correctamente.';
    } catch (mysqli_sql_exception $e) {
        echo 'Error: ' . $e->getMessage();
    }

    $mysqli->close();
}

// Obtener y mostrar información actual del usuario desde la base de datos
// Puedes reutilizar el código que obtiene la información del usuario en la sección anterior

?>

<div>
    <h1>Editar Información Personal</h1>
    <form method="post" action="edit.php">
        <!-- Formulario de edición -->
        <label>CHANGE PHOTO: <input type="file" name="email" value="<?php echo $usuario['foto']; ?>"></label>
        <label>Name: <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required></label>
        <label>Email: <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required></label>
        <label>Bio: <input type="text" name="text" value="<?php echo $usuario['text']; ?>" required></label>
        <label>Phone: <input type="number" name="telefono" value="<?php echo $usuario['telefono']; ?>" required></label>
        <label>Email: <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required></label>
        <label>Password: <input type="password" name="password" value="<?php echo $usuario['password']; ?>" required></label>
        <!-- Agrega más campos según tu esquema de base de datos -->
        <button type="submit">Guardar Cambios</button>
    </form>
</div>

<?php
include('include/footer.php');
?>
