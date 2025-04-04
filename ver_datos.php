<?php
$conexion = new mysqli("localhost", "root", "", "formulario_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// 
$sql = "SELECT id, nombre, correo, telefono, asunto, fecha, mensaje FROM contactos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Datos Recibidos</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Asunto</th>
                <th>Fecha</th>
                <th>Mensaje</th>
            </tr>
            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["id"] . "</td>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["correo"] . "</td>";
                    echo "<td>" . $fila["telefono"] . "</td>";
                    echo "<td>" . $fila["asunto"] . "</td>";
                    echo "<td>" . $fila["fecha"] . "</td>";
                    echo "<td>" . $fila["mensaje"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No hay datos registrados</td></tr>";
            }
            ?>
        </table>
        <p><a href="index.html">Volver al formulario</a></p>
    </div>
</body>
</html>

<?php
$conexion->close();
?>