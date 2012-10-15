<?php
	include("../comunes/session_start.php");
	include("../model/Empleado.class.php");
	require 'control.php';
	$url = "laempresa.php";
	#Se incluye la vista y el contenido
	require 'contenido.php';
	require 'vista.php';
?>