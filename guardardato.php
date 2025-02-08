<?php
include 'conexion.php';

if (isset($_POST["enviar"])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, apellido, email, consulta, mensaje) 
            VALUES ('$nombre', '$apellido', '$email', '$consulta', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        // Redirigir al formulario 
        header("Location: formulario.php?success=1");
        exit();
    } else {
        header("Location: formulario.php?error=1");
        exit();
    }

    $conexion->close();
}
?>
