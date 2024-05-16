<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Combustible</title>
    <link rel="stylesheet" href="css/styles12.css"> <!-- Vinculamos el archivo CSS -->
</head>
<body>
    <header>
        <div class="franja-rosa">
            <img src="img/logofinal.jpg" alt="Logo de la empresa" class="logo-empresa">
            <h1 class="titulo-esquina">COMBUSTIBLE</h1>
        </div>
        <h1>Registro de Combustible</h1>
    </header>

    <div class="container">
        <form action="guardar_combustible.php" method="POST">
            <label for="precio_combustible">Precio del Combustible:</label>
            <input type="number" id="precio_combustible" name="precio_combustible" required>

            <label for="tipo_vehiculo">Tipo de Vehículo:</label>
            <select id="tipo_vehiculo" name="tipo_vehiculo" required>
                <option value="Automóvil">Automóvil</option>
                <option value="Camión">Camión</option>
                <!-- Agrega más opciones según sea necesario -->
            </select>

            <label for="distancia_km">Distancia en Kilómetros:</label>
            <input type="number" id="distancia_km" name="distancia_km" required>

            <label for="rendimiento_vehiculo">Rendimiento del Vehículo:</label>
            <input type="number" id="rendimiento_vehiculo" name="rendimiento_vehiculo" required>

            <label for="generar_costo">Generar Costo:</label>
            <input type="checkbox" id="generar_costo" name="generar_costo">

            <label for="costo_combustible">Costo del Combustible:</label>
            <input type="text" id="costo_combustible" name="costo_combustible" readonly>

            <div class="button-container">
                <button class="boton-guardar" type="button" onclick="calcularCosto()">Calcular Costo</button>
                <button class="boton-guardar" type="submit">Guardar Registro</button>
                <a href="mostrar_combustible.php" class="boton-ver-registro">Ver Registro</a>
            </div>
        </form>
    </div>

    <footer>
        <div class="boton-inicio-container">
            <a href="menu.html" class="boton-inicio">Ir a la página de inicio</a>
        </div>
    </footer>

    <script>
        function calcularCosto() {
            var precioCombustible = parseFloat(document.getElementById('precio_combustible').value);
            var distanciaKm = parseFloat(document.getElementById('distancia_km').value);
            var rendimientoVehiculo = parseFloat(document.getElementById('rendimiento_vehiculo').value);

            if (!isNaN(precioCombustible) && !isNaN(distanciaKm) && !isNaN(rendimientoVehiculo)) {
                var costoCombustible = (distanciaKm / rendimientoVehiculo) * precioCombustible;
                document.getElementById('costo_combustible').value = costoCombustible.toFixed(2);
            } else {
                alert('Por favor, ingrese valores numéricos válidos para el precio del combustible, la distancia en kilómetros y el rendimiento del vehículo.');
            }
        }
    </script>
</body>
</html>
