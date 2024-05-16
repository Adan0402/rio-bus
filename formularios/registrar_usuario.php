<?php
include_once("conexion.php");

// Validar y sanear datos
$Nombre_empresa = $_POST['Nombre_empresa'];
$email = $_POST['email'];
$duracion_contrato = $_POST['duracion_contrato'];
$numero_dehoras =$_POST['numero_dehoras'];
$numero_empleados = $_POST['numero_empleados'];
$direccion =$_POST['direccion'];
$tipo_contrato = $_POST['tipo_contrato'];
$presupuesto_inicial =$_POST['presupuesto_inicial'];
$firma_riobus = $_POST['firma_riobus'];
$firma_empresa = $_POST['firma_empresa'];

// Ejecutar consulta SQL para la inserción de datos
$sql = "INSERT INTO contratos (Nombre_empresa, email, duracion_contrato, numero_dehoras, numero_empleados, direccion, tipo_contrato, presupuesto_inicial, firma_riobus, firma_empresa) 
        VALUES ('$Nombre_empresa', '$email', '$duracion_contrato', '$numero_dehoras', '$numero_empleados', '$direccion', '$tipo_contrato', '$presupuesto_inicial', '$firma_riobus', '$firma_empresa')";

if (mysqli_query($conn, $sql)) {
    // Inserción exitosa
    echo "Contrato registrado exitosamente";
} else {
    // Error en la inserción
    echo "Error al registrar el contrato: " . mysqli_error($conn);
}

// Redireccionar a la página principal
header("Location: menu.html");
exit();
?>

