<?php
// Incluimos el archivo de conexión a la base de datos
include_once("conexion.php");

// Validar y sanitizar los datos del formulario
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nombre_empleado = mysqli_real_escape_string($conn, $_POST['nombre_empleado']);
$id_conductor = mysqli_real_escape_string($conn, $_POST['id_conductor']);
$puesto = mysqli_real_escape_string($conn, $_POST['puesto']);
$sueldo = mysqli_real_escape_string($conn, $_POST['sueldo']);

// Ejecutar consulta SQL para la inserción de datos
$sql = "INSERT INTO gestion_personal(id, nombre_empleado, id_conductor, puesto, sueldo) 
        VALUES ('$id', '$nombre_empleado', '$id_conductor', '$puesto', '$sueldo')";

if (mysqli_query($conn, $sql)) {
    // Inserción exitosa
    echo "Empleado registrado exitosamente";
} else {
    // Error en la inserción
    echo "Error al registrar el empleado: " . mysqli_error($conn);
}

// Redireccionar a la página principal
header("Location: menu.html");
exit();
?>
