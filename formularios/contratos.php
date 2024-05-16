<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratos</title>
    <link rel="stylesheet" href="css/styles2.css"> <!-- Vinculamos el archivo CSS -->
</head>
<body>
    <header>
    <div class="franja-rosa"> <!-- Franja rosa -->
        <img src="img/logofinal.jpg" alt="Logo de la empresa" class="logo-empresa">
         <h1 class="titulo-esquina">CONTRATOS</h1>
    </div>
    <h1>Contratos</h1>
    </header>

    <div class="container">
        <div class="columna">
            <h2>Información del Contrato</h2>
            <form action="registrar_usuario.php" method="POST">
                <label for="id_contrato">id_contrato:</label>
                <input type="text" id="id_contrato" name="id_contrato" required>

                <label for="Nombre_empresa">Nombre de la Empresa:</label>
                <input type="text" id="Nombre_empresa" name="Nombre_empresa" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="tipo_contrato">Tipo de Contrato:</label>
                <select id="tipo_contrato" name="tipo_contrato" required>
                    <option value="Contrato A">Contrato A</option>
                    <option value="Contrato B">Contrato B</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>

                <label for="presupuesto_inicial">Presupuesto Inicial:</label>
                <input type="number" id="presupuesto_inicial" name="presupuesto_inicial" required>
            </div>
        
            <div class="columna">
                <h2>Detalles del Contrato</h2>
                <label for="duracion_contrato">Duración del Contrato:</label>
                <input type="text" id="duracion_contrato" name="duracion_contrato" required>

                <label for="numero_dehoras">Número de Horas:</label>
                <input type="number" id="numero_dehoras" name="numero_dehoras" required>

                <label for="numero_empleados">Número de Empleados:</label>
                <input type="number" id="numero_empleados" name="numero_empleados" required>

                <label for="firma_riobus">Firma Rio Bus:</label>
                <input type="text" id="firma_riobus" name="firma_riobus" required>
            </div>
        
        <button class="boton-guardar" type="submit">Guardar Contrato</button>
        </form>
    </div>
    
    <footer>
        <a href="menu.html" class="boton-inicio">Ir a la página de inicio</a>
    </footer>
</body>
</html>

