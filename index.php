<?php
	include("comunes/session_start.php");
	include("model/DBMysql.php");
	if(DBMysql::isLoggerEmpleado()) {
		header("Location: intranet/index.php");
		exit();
	} else if(DBMysql::isLoggerCliente()) {
		header("Location: extranet/index.php");
		exit();
	} else {
		header("Location: internet/index.php");
		exit();
	}
?>