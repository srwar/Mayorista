<?php 
	session_name("Tu Distribuidora");
	session_start();
	if(isset($_POST) && !empty($POST['usuario']) && !empty($POST['clave']))) {
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['clave'];
	} 

?>