<?php

use LDAP\Result;

if (isset($_POST["nombre"])) {
    $txtPassword = md5($_POST["password"]);
    $txtEmail = $_POST["email"];
}

include"modelo/coneccion.php";

#SENTENCIA slq para validar la informacion  a la base de datos 
$sql = "SELECT * FROM User WHERE email = '$txtEmail' AND password = '$txtPassword'";

$stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :email AND password = :password");
$stmt->execute(['email' => $txtEmail, 'password' => $txtPassword]);
$result = $stmt->fetch();

//resulado del inicio

  $result =$conexion->query($sql); 
    if ($result->num_rows>0) { 
  
  $user = $Result ->fetch_assoc();

  session_start();
    $_SESSION['inicio'] = $user['name'];


} 
header('<location:>login.php');

?>
