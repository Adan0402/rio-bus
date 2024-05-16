<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Empleados</title>
    <link rel="stylesheet" href="css/styles8.css"> <!-- Vinculamos el archivo CSS -->
</head>
<body>
    <header>
        <div class="franja-rosa"> <!-- Franja rosa -->
            <img src="img/logofinal.jpg" alt="Logo de la empresa" class="logo-empresa">
            <h1 class="titulo-esquina">EMPLEADOS</h1>
        </div>
        <h1>Registro de Empleados</h1>
    </header>

    <div class="container">
        <form action="guardar_empleado.php" method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>

            <label for="nombre_empleado">Nombre del Empleado:</label>
            <input type="text" id="nombre_empleado" name="nombre_empleado" required>

            <label for="id_conductor">ID del Conductor:</label>
            <input type="text" id="id_conductor" name="id_conductor" required>

            <label for="puesto">Puesto:</label>
            <input type="text" id="puesto" name="puesto" required>

            <label for="sueldo">Sueldo:</label>
            <input type="number" id="sueldo" name="sueldo" required>

            <button class="boton-guardar" type="submit">Guardar Empleado</button>
        </form>
    </div>
    
    <footer>
    <div class="boton-inicio-container">
       <a href="menu.html" class="boton-inicio">Ir a la página de inicio</a>
    </div>
    </footer>

</body>
</html>
