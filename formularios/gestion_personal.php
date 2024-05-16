<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Personal</title>
    <link rel="stylesheet" href="css/styles5.css"> <!-- Vincula el archivo CSS -->
</head>
<body>
    <header>
        <h1>Gestión de Personal - Contratos Registrados</h1>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID Contrato</th> <!-- Nuevo campo -->
                    <th>Empresa</th>
                    <th>Correo Electrónico</th>
                    <th>Dirección</th>
                    <th>Tipo de Contrato</th>
                    <th>Presupuesto Inicial</th>
                    <th>Duración del Contrato</th>
                    <th>Número de Horas</th>
                    <th>Número de Empleados</th>
                    <th>Firma Rio Bus</th>
                    <th>Firma Empresa</th>
                </tr>
            </thead>
            <tbody>
    <?php
    include_once("conexion.php");

    // Realizar la consulta SQL para seleccionar todos los contratos
    $sql = "SELECT * FROM contratos";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Mostrar los datos de cada contrato en filas de la tabla
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id_contrato']."</td>"; 
            echo "<td>".$row['Nombre_empresa']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['direccion']."</td>";
            echo "<td>".$row['tipo_contrato']."</td>";
            echo "<td>".$row['presupuesto_inicial']."</td>";
            echo "<td>".$row['duracion_contrato']."</td>";
            echo "<td>".$row['numero_dehoras']."</td>";
            echo "<td>".$row['numero_empleados']."</td>";
            echo "<td>".$row['firma_riobus']."</td>";
            echo "<td>".$row['firma_empresa']."</td>";
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
        <a href="menu.html" class="boton-inicio">Ir a la página de inicio</a>
    </footer>
</body>
</html>
