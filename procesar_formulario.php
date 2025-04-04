<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_db");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$fecha = $_POST['fecha'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la base de datos
$sql = "INSERT INTO contactos (nombre, correo, telefono, asunto, fecha, mensaje) 
        VALUES ('$nombre', '$correo', '$telefono', '$asunto', '$fecha', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Mensaje enviado correctamente. <a href='index.html'>Volver</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>