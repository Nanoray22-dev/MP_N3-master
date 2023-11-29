<?php 
require_once "../DB/conn.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST('email');
    $password = $_POST('password');
}
$pdo = "SELECT * FROM  usuario WHERE `email` = '$email' "; 


try {
   $result = $mysqli -> prepare($pdo); 
//    $result -> bind_param("s", "raysell22@gmail.com");
   $result -> execute();
   $resultado = $result -> get_result();
   $data = $resultado -> fetch_assoc();
   print_r($data); 
   
   if(password_verify($password, $data['password'])){
    print_r($data);
   }else{
    echo "No existe la contraseña";
   }
} catch (mysqli_sql_exception $e) {
   echo "Error: " . $e->getMessage();
}