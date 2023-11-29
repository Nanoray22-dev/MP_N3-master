<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Devchallenges</title>
</head>
<body>
    <?php session_start(); ?>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php
            if (isset($_SESSION['user_id'])) {
                echo '<li><a href="personal_info.php">Información Personal</a></li>';
                echo '<li><a href="edit.php">Editar Información</a></li>';
                echo '<li><a href="logout.php">Cerrar Sesión</a></li>';
            } else {
                echo '<li><a href="login.php">Iniciar Sesión</a></li>';
                echo '<li><a href="register.php">Registrarse</a></li>';
            }
            ?>
        </ul>
    </nav>
    <!-- Pie de página, scripts, etc. -->
</body>
</html>
