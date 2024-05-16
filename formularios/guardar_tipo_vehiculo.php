<?php
// Incluir el archivo de conexión a la base de datos
include_once("conexion.php");

// Obtener los datos del formulario
$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);

// Preparar la consulta SQL para insertar los datos en la tabla tipo_vehiculo
// Supongamos que $id_combustible contiene el ID del tipo de combustible al que deseas asociar el nuevo tipo de vehículo

// Prepara la consulta SQL para insertar un nuevo tipo de vehículo
$sql = "INSERT INTO tipo_vehiculo (nombre, descripcion) 
        VALUES ('$nombre', '$descripcion')";

// Ejecuta la consulta SQL
if (mysqli_query($conn, $sql)) {
    // Inserción exitosa
    echo "Nuevo tipo de vehículo agregado correctamente";
} else {
    // Error en la inserción
    echo "Error al agregar el tipo de vehículo: " . mysqli_error($conn);
}
// Redireccionar a la página principal
header("Location: menu.html");
exit();

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
