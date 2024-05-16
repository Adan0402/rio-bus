<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Vehículos</title>
    <link rel="stylesheet" href="css/styles9.css"> <!-- Vincula el archivo CSS -->
</head>
<body>
    
    <header>
        <div class="franja-rosa">
            <img src="img/logofinal.jpg" alt="Logo de la empresa" class="logo-empresa">
            <h1 class="titulo-esquina">VEHÍCULOS</h1>
        </div>
        <h1>Registro de Vehículos</h1>
    </header>

    <div class="container">
        <form action="guardar_tipo_vehiculo.php" method="POST">
            <label for="nombre">Nombre del Vehículo:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>

            <button type="submit">Guardar</button>
        </form>
        <!-- Botón para ir a mostrar_vehiculo.php -->
        <div class="boton-mostrar-container">
            <a href="mostrar_vehiculo.php" class="boton-mostrar">Ver Vehículos Registrados</a>
        </div>
    </div>

    <footer>
        <div class="boton-inicio-container">
            <a href="menu.html" class="boton-inicio">Ir a la página de inicio</a>
        </div>
    </footer>

</body>
</html>
