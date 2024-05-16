<?php
$Servidor="localhost"; //nombre del Servidor, comunmente localhost
$Usuario="root";  //nombre del usuario con privilegios en la base de datos
$Password="";   //Password del usuario
$BaseDatos="riobus1.1";  //Base de datos a la cual se conectara

$conn = new mysqli($Servidor,$Usuario,$Password,$BaseDatos); //Conexion de la base de datos
	if($conn->connect_errno) //Si existe un error en la conexion, ya sea porque el usuario o el password no son o simplemente la base de datos no existe.
	{	// se muestra el tipo de error en la conexion a la base de datos
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>