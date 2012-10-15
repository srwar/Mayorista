<?php
	session_name("Mayorista");
	session_start();
	include("../model/DBMysql.php");
	require 'control.php';
	if(isset($_GET["LogOut"]) && $_GET["LogOut"] == $_SESSION['LogOut']) {
      session_unset();
      session_destroy();
      
      header("Location: ../index.php");
	  exit();
	}
	if(DBMysql::isLoggerCliente()) {
		header("Location: principal.php");
	}
?>	