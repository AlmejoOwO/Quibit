<?php
$servername = "localhost"; // Servidor (por defecto: localhost)
$username = "root";        // Usuario (por defecto en Laragon: root)
$password = "";            // Contraseña (por defecto en Laragon: vacío)
$dbname = "quibit";        // Nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "Conexión exitosa";
?>
