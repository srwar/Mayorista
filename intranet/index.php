<?php
	include("../comunes/session_start.php");
	if(isset($_GET["LogOut"]) && $_GET["LogOut"] == $_SESSION['LogOut']) {
      session_unset();
      session_destroy();
      
      header("Location: ../index.php");
	  exit();
	} 
	if(isset($_SESSION['Empleado'])) {
		header("Location: principal.php");
		exit();
	} else {		
		$url = "FormLog.php";
		require "../internet/vista.php";
	}
	
?>	