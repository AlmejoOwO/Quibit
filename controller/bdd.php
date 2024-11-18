<?php
//informaciond e la base de datos
$servidor ="localhost" ; 
$usuario ="root" ; 
$clave ="" ; 
$basededatos ="quibit" ; 

// variable para crear la coneccion 
$conexion = mysqli_connect($servidor ,$usuario, $clave,$basededatos,$enlase);

//verificar conexion 
If($conexion ->connect_error ){
     die("conecicon fallida :". $conexion ->connect_error);
 
} else {
    echo"conexion completada BD:PHP";
}
  

?>
