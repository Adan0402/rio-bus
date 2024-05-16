<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Combustible</title>
    <link rel="stylesheet" href="css/styles11.css"> <!-- Vinculamos el archivo CSS -->
</head>
<body>
    <header>
        <div class="franja-rosa">
            <img src="img/logofinal.jpg" alt="Logo de la empresa" class="logo-empresa">
            <h1 class="titulo-esquina">DATOS DE COMBUSTIBLE</h1>
        </div>
        <h1>Datos de Combustible Registrados</h1>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                
                    <th>Precio del Combustible</th>
                    <th>Tipo de Vehículo</th>
                    <th>Distancia en Kilómetros</th>
                    <th>Rendimiento del Vehículo</th>
                    <th>Costo del Combustible</th>
                    <th>Imagen</th> <!-- Columna para la imagen -->
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("conexion.php");

                // Realizar la consulta SQL para seleccionar todos los registros de combustible
                $sql = "SELECT * FROM combustible";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Mostrar los datos de cada registro en filas de la tabla
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Verificar si las claves existen antes de acceder a ellas
                        $precio_combustible = isset($row['precio_combustible']) ? $row['precio_combustible'] : '';
                        $tipo_vehiculo = isset($row['tipo_vehiculo']) ? $row['tipo_vehiculo'] : '';
                        $distancia_km = isset($row['distancia_km']) ? $row['distancia_km'] : '';
                        $rendimiento_vehiculo = isset($row['rendimiento_vehiculo']) ? $row['rendimiento_vehiculo'] : '';
                        $imagen = isset($row['imagen']) ? $row['imagen'] : 'ruta/a/imagen.jpg'; // Ruta por defecto o desde la base de datos

                        // Calcular el costo del combustible
                        if (!is_nan($precio_combustible) && !is_nan($distancia_km) && !is_nan($rendimiento_vehiculo)) {
                            $costo_combustible = ($distancia_km / $rendimiento_vehiculo) * $precio_combustible;
                        } else {
                            $costo_combustible = 'N/A';
                        }

                        echo "<tr>";
                ;
                        echo "<td>$precio_combustible</td>";
                        echo "<td>$tipo_vehiculo</td>";
                        echo "<td>$distancia_km</td>";
                        echo "<td>$rendimiento_vehiculo</td>";
                        echo "<td>".number_format($costo_combustible, 2)."</td>";
                        echo "<td><img src='$imagen' alt='Imagen del vehículo' style='width:100px; height:auto;'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No se encontraron registros de combustible</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <div class="boton-inicio-container">
            <a href="combustible.php" class="boton-inicio">Ir a la página de inicio</a>
        </div>
    </footer>
</body>
</html>
