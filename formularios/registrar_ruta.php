<?php
// Incluir el archivo de conexión a la base de datos
include_once("conexion.php");

// Validar y sanitizar datos recibidos del formulario
$id = $_POST['id'];
$nombre_ruta = $_POST['nombre_ruta'];
$puntos_llegada = $_POST['puntos_llegada'];
$nombre_conductor = $_POST['nombre_conductor'];
$elegir_ruta = isset($_POST['elegir_ruta']) ? 1 : 0;
$monitorear_ruta = isset($_POST['monitorear_ruta']) ? 1 : 0;
$tipo_vehiculo = $_POST['tipo_vehiculo'];
$generar_ruta = isset($_POST['generar_ruta']) ? 1 : 0;

// Ejecutar consulta SQL para la inserción de datos en la tabla planificar_ruta
$sql = "INSERT INTO planificar_ruta (id, nombre_ruta, puntos_llegada, nombre_conductor, elegir_ruta, monitorear_ruta, tipo_vehiculo, generar_ruta) 
        VALUES ('$id', '$nombre_ruta', '$puntos_llegada', '$nombre_conductor', '$elegir_ruta', '$monitorear_ruta', '$tipo_vehiculo', '$generar_ruta')";

if (mysqli_query($conn, $sql)) {
    // Inserción exitosa
    echo "Ruta registrada exitosamente";
} else {
    // Error en la inserción
    echo "Error al registrar la ruta: " . mysqli_error($conn);
}

// Redireccionar a la página principal
header("Location: menu.html");
exit();
?>
