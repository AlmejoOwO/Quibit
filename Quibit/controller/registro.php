<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_base_datos";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Capturar datos del formulario
$identificacion = $_POST['identificacion'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

// Insertar datos en la tabla
$sql = "INSERT INTO clientes (idCliente, Nombre, telefono, correo, direccion) VALUES ('$identificacion', '$nombre', '$telefono', '$correo', '$direccion')";
if ($conn->query($sql) === TRUE) {
    echo "Registro guardado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

