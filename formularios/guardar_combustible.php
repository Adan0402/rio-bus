<?php
// Incluimos el archivo de conexión
include_once("conexion.php");

// Validar y sanear datos
$precio_combustible = mysqli_real_escape_string($conn, $_POST['precio_combustible']);
$tipo_vehiculo = mysqli_real_escape_string($conn, $_POST['tipo_vehiculo']);
$distancia_km = mysqli_real_escape_string($conn, $_POST['distancia_km']);
$rendimiento_vehiculo = mysqli_real_escape_string($conn, $_POST['rendimiento_vehiculo']);
$generar_costo = isset($_POST['generar_costo']) ? 1 : 0; // Si está marcado, se guarda como 1, de lo contrario, como 0

// Ejecutar consulta SQL para la inserción de datos
$sql = "INSERT INTO combustible (precio_combustible, tipo_vehiculo, distancia_km, rendimiento_vehiculo, generar_costo) 
        VALUES ('$precio_combustible', '$tipo_vehiculo', '$distancia_km', '$rendimiento_vehiculo', '$generar_costo')";

if (mysqli_query($conn, $sql)) {
    // Inserción exitosa
    echo "Registro de combustible guardado exitosamente";
} else {
    // Error en la inserción
    echo "Error al guardar el registro de combustible: " . mysqli_error($conn);
}
?>
