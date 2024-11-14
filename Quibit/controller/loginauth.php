<?php

use LDAP\Result;

if (isset($_POST["nombre"])) {
    $txtPassword = md5($_POST["password"]);
    $txtEmail = $_POST["email"];
}

include"modelo/coneccion.php";


$sql = "SELECT * FROM User WHERE email = '$txtEmail' AND password = '$txtPassword'";

$stmt = $pdo->prepare("SELECT * FROM cliente WHERE email = :email AND password = :password");
$stmt->execute(['email' => $txtEmail, 'password' => $txtPassword]);
$result = $stmt->fetch();


  $result =$conexion->query($sql); 
    if ($result->num_rows>0) { 
  
  $user = $Result ->fetch_assoc();

  session_start();
    $_SESSION['admin'] = $user['name'];


} 
header('<location:>login.php');

?>
