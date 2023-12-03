<?php
require_once '../DB/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $contrasena = $_POST['password'];

    $hash = password_hash($contrasena, PASSWORD_DEFAULT);
}


$query = "INSERT INTO usuario (`email`, `password`) VALUE (?,?)";

try {

    $stm = $pdo->prepare($query);
    $stm->execute([
        $email,
        $hash
    ]);
    $userData = $pdo -> prepare("SELECT * FROM usuario WHERE email = ?");
    $userData -> execute([
        $email
    ]);
    $userResult = $userData -> fetch(PDO::FETCH_ASSOC);
    session_start();
    $_SESSION['dato'] = $userResult;
    header('location: ../user/personal_info.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
