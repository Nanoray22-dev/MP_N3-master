<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Iniciar Sesión</h1>
    <?php
    phpinfo();
    ?>
    <form method="post" action="../action/login.php">
        <!-- Formulario de inicio de sesión -->
        <label>Email: <input type="email" name="email" required></label>
        <label>Contraseña: <input type="password" name="password" required></label>
        <button type="submit">Iniciar Sesión</button>
    </form>
</div>
</body>
</html>