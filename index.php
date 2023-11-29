<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/loginStyle.css">
    <title>Registro</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="./DB/register_form.php" method="POST" id="registerForm">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="./DB/registro_form.php" method="POST" id="loginForm">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" id="email">
                <input type="password" placeholder="Password" id="password">
                <p>Forget Your Password?</p>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/login.js"></script>
</body>

</html> -->



<?php
session_start();
include('include/header.php');
?>

<div>
    <h1>Bienvenido</h1>
    <?php
    if (isset($_SESSION['user_id'])) {
        echo '<p>¡Hola, usuario!</p>';
    } else {
        echo '<p>Inicia sesión o regístrate para acceder a la información personal.</p>';
    }
    ?>
</div>

<?php
include('include/footer.php');
?>
