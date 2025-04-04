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

// Consultar datos
$sql = "SELECT * FROM contactos ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Registrados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Datos Registrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Asunto</th>
            <th>Mensaje</th>
            <th>Fecha</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['correo']}</td>
                        <td>{$row['telefono']}</td>
                        <td>{$row['asunto']}</td>
                        <td>{$row['mensaje']}</td>
                        <td>{$row['fecha']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No hay registros.</td></tr>";
        }
        ?>
    </table>
    <a href="index.html">Volver</a>
</body>
</html>

<?php
$conn->close();
?>
