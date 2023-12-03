<?php

#PARA AGREGAR DATOS DESDE LA TABLA 

require_once '../DB/conn.php';
session_start(); 
$user_id= $_SESSION['dato']['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto'])){
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $nombres= $_POST['nombres'];
    $bio= $_POST['bio'];
    $telefono= $_POST['telefono'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $base_url = '../upload/';
    $tmp = $_FILES['foto']['tmp_name'];
    $imgName = $_FILES['foto']['nombres'];
    $ext = pathinfo($imgName, PATHINFO_EXTENSION);
    $url = $base_url . "profile_$user_id." . $ext;
    move_uploaded_file($tmp, $url);
   

$query = 'UPDATE usuario SET `email` = ?,  `password` = ?, `foto`= ?, `nombres`= ?, `bio`= ?, `telefono` = ? WHERE id = ?';


try{

    $stm = $pdo->prepare($query);
    $rs = $stm->execute([
        $email,
        $hash,
        #$password,
        #$foto,
        $url, 
        $nombres,
        $bio,
        $telefono,
        $user_id ,
    ]);

    $sql = "SELECT * FROM usuario WHERE `id`= ?";
    $stm1 = $pdo->prepare($sql);
    $stm1->execute(
        [$user_id]
    );

    $rs = $stm1->fetch(PDO::FETCH_ASSOC);

    session_start(); 
    $_SESSION['dato'] = $rs;
    $dato = $_SESSION['dato'];

   header('location: ../user/personal_info.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
} 

}
