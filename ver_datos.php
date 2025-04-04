<?php
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

// Obtener datos
$sql = "SELECT id, nombre, correo, telefono, asunto, mensaje FROM contacto";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Datos Registrados</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Asunto</th>
                <th>Mensaje</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["nombre"]."</td>
                            <td>".$row["correo"]."</td>
                            <td>".$row["telefono"]."</td>
                            <td>".$row["asunto"]."</td>
                            <td>".$row["mensaje"]."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No hay datos registrados</td></tr>";
            }
            ?>
        </table>
        <a href="index.html"><button>Volver</button></a>
    </div>
</body>
</html>

<?php
$conn->close();
?>
