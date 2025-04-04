<<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "formularios_db";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Validar datos recibidos
if (empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["mensaje"])) {
    die("Error: Todos los campos son obligatorios.");
}

// Sanitizar entrada
$nombre = $conn->real_escape_string($_POST["nombre"]);
$correo = $conn->real_escape_string($_POST["correo"]);
$telefono = $conn->real_escape_string($_POST["telefono"]);
$asunto = $conn->real_escape_string($_POST["asunto"]);
$mensaje = $conn->real_escape_string($_POST["mensaje"]);

// Insertar datos en la base
$sql = "INSERT INTO contacto (nombre, correo, telefono, asunto, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$asunto', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "<p>✅ Datos guardados correctamente. <a href='index.html'>Volver</a></p>";
} else {
    echo "❌ Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>