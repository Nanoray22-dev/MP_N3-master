<?php
require_once "../DB/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuario WHERE email = ?";

    try {
        $stm = $pdo->prepare($query);
        $stm->execute([$email]);

        $result = $stm->fetch(PDO::FETCH_ASSOC);

        if ($result) {

            var_dump($result);

            if (password_verify($password, $result['password'])) {
                session_start();
                $_SESSION['dato'] = $result;
                header('location: ../user/personal_info.php');
                exit();
            } else {
                echo "no coincide.";
            }
        } else {
            echo "El correo electrónico proporcionado no está registrado.";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {

    exit();
}

?>
