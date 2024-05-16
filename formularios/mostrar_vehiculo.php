<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de vehiculos</title>
    <link rel="stylesheet" href="css/styles5.css"> <!-- Vincula el archivo CSS -->
</head>
<body>
    <header>
        <h1>Gestión de Vehiculos</h1>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th> <!-- Nuevo campo -->
                    <th>nombre</th>
                    <th>Descripcion</th>
                
                </tr>
            </thead>
            <tbody>
    <?php
    include_once("conexion.php");

    // Realizar la consulta SQL para seleccionar todos los contratos
    $sql = "SELECT * FROM tipo_vehiculo";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Mostrar los datos de cada contrato en filas de la tabla
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id_tipo_vehiculo']."</td>"; 
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['descripcion']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11'>No se encontraron contratos registrados</td></tr>";
    }
    ?>
</tbody>
        </table>
    </div>

    <footer>
        <a href="tipo_vehiculo.php" class="boton-inicio">Ir a la página de inicio</a>
    </footer>
</body>
</html>

