<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formularios_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO contactos (nombre, correo, telefono, asunto, mensaje, fecha) 
            VALUES ('$nombre', '$correo', '$telefono', '$asunto', '$mensaje', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente. <a href='index.html'>Volver</a>";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
} else {
    echo "Acceso no permitido.";
}

$conn->close();
?>
