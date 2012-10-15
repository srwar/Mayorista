<?php 
	include("../model/DBMysql.php");
	if(DBMysql::isLoggerEmpleado()) {
		header("Location: ../index.php");
		exit();
	} else if(DBMysql::isLoggerCliente()) {
		header("Location: ..extranet/index.php");
		exit();
		}
?>	