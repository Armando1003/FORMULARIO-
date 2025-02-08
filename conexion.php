<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "contacto_db";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexión fallida: " . $conexion->connect_errno);
}

// Si la conexión es exitosa
echo "Conexion Exitosa.";
?>

