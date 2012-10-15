<?php
	include("../comunes/session_start.php");
	include("../model/Empleado.class.php");
	$MOSTRAR = false;
	$empleado = unserialize($_SESSION['Empleado']);
	$empleado->puedoEstarAqui(1);
	if(isset($_SESSION['ABM']) && isset($_SESSION['producto']))
		$url = "CtrABMProducto.php";
	else
		$url = "FormOptionABM.php";	
	#Se incluye la vista y el contenido
	require 'contenido.php';
	require 'vista.php';
?>