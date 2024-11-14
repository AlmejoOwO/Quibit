<?php
//informaciond e la base de datos
$servidor ="localhost" ; 
$usuario ="root" ; 
$clave ="123456789" ; 
$basededatos ="quibit" ; 

// variable para crear la coneccion 
$conexion = new mysqli($servidor ,$usuario, $clave,$basededatos,$enlase);

// conccion con la base de datos
If($conexion ->connect_error ){
     die("conecicon fallida :". $conexion ->connect_error);
 
} else {
    echo"conexion completada BD:PHP";
}
  

?>