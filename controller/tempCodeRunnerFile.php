<?php
//informaciond e la base de datos
$servidor ="localhost" ; 
$usuario ="root" ; 
$clave ="123456789" ; 
$basededatos ="quibit" ; 

// variable para crear la coneccion 
$conexion = mysqli_connect($servidor ,$usuario, $clave,$basededatos,$enlase);

//verificar conexion 
If($conexion ->connect_error ){
     die("conecicon fallida :". $conexion ->connect_error);
 
} else {
    echo"conexion completada BD:PHP";
}
  
$con = mysqli_connect("","*the_name*","*the_pass*","*the_database*");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>