<?php
// Conectar con la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_db");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT * FROM contactos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Lista de Contactos</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
        </tr>
        <?php
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['correo']}</td>
                        <td>{$fila['mensaje']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay datos registrados</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>
