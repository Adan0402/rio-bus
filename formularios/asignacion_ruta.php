<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Ruta</title>
  <link rel="stylesheet" href="css/stylesAR.css">
  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
  <!-- Leaflet Draw CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-draw/dist/leaflet.draw.css">
  <style>
    /* Estilos para el mapa */
    #map { 
      height: 400px; 
      width: 100%;
    }
  </style>
</head>
<body>
    <header>
        <div class="franja-rosa"> <!-- Franja rosa -->
            <img src="img/logofinal.jpg" alt="Logo de la empresa" class="logo-empresa">
            <h1 class="titulo-esquina">Asignación de Ruta</h1>
        </div>
    </header>

  <div class="container">
    <h2>Ingrese datos de Ruta</h2>
    <!-- Formulario -->
    <form action="registrar_ruta.php" method="POST">
      <label for="id">ID:</label><br>
      <input type="text" id="id" name="id" required><br><br>

      <label for="nombre_ruta">Nombre de la Ruta:</label><br>
      <input type="text" id="nombre_ruta" name="nombre_ruta" required><br><br>

      <label for="puntos_llegada">Puntos de Llegada:</label><br>
      <input type="text" id="puntos_llegada" name="puntos_llegada" required><br><br>

      <label for="nombre_conductor">Nombre del Conductor:</label><br>
      <input type="text" id="nombre_conductor" name="nombre_conductor" required><br><br>

      <!-- Contenedor para el mapa -->
      <div id="map"></div><br>

      <label for="elegir_ruta">Elegir Ruta:</label><br>
      <input type="checkbox" id="elegir_ruta" name="elegir_ruta"><br><br>

      <label for="monitorear_ruta">Monitorear Ruta:</label><br>
      <input type="checkbox" id="monitorear_ruta" name="monitorear_ruta"><br><br>

      <label for="tipo_vehiculo">Tipo de Vehículo:</label><br>
      <select id="tipo_vehiculo" name="tipo_vehiculo" required>
        <option value="">Seleccionar Tipo de Vehículo</option>
        <option value="Automóvil">Automóvil</option>
        <option value="Camión">Camión</option>
        <option value="Motocicleta">Motocicleta</option>
        <option value="Bicicleta">Bicicleta</option>
      </select><br><br>

      <label for="generar_ruta">Generar Ruta:</label><br>
      <input type="checkbox" id="generar_ruta" name="generar_ruta"><br><br>

      <input type="submit" value="Enviar" class="boton-enviar">
    </form>
  </div>

  <footer>
      <div class="boton-inicio-container">
          <a href="menu.html" class="boton-inicio">Ir a la página de inicio</a>
      </div>
  </footer>

  <!-- Leaflet.js y Leaflet Draw JS -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-draw/dist/leaflet.draw.js"></script>
  <script>
    // Función para inicializar el mapa
    function initMap() {
      var map = L.map('map').setView([51.505, -0.09], 13); // Coordenadas y zoom inicial

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
      }).addTo(map);

      // Agregar la barra de herramientas de dibujo al mapa
      var drawControl = new L.Control.Draw({
        draw: {
          polyline: true, // Permitir dibujar líneas poligonales (rutas)
          polygon: false,
          circle: false,
          rectangle: false,
          marker: false
        },
        edit: {
          featureGroup: new L.FeatureGroup() // Permitir editar rutas
        }
      });
      map.addControl(drawControl);
      
      // Escuchar el evento cuando se dibuja una ruta y capturar sus coordenadas
      map.on('draw:created', function (e) {
        var layer = e.layer;
        var coordinates = layer.getLatLngs(); // Obtener las coordenadas de la ruta
        console.log('Coordenadas de la ruta:', coordinates);
        // Puedes enviar las coordenadas al formulario si lo deseas
      });
    }
    
    // Llamar a la función de inicialización del mapa cuando la página esté lista
    document.addEventListener('DOMContentLoaded', function () {
      initMap();
    });
  </script>
</body>
</html>
