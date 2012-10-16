<?php
	if(!isset($_POST)) {
		header("Location: ../index.php");
		exit();
	}
	
	include_once "DBMysql.php";
	if(isset($_POST['tuser']) && $_POST['tuser'] == "intranet") {
		if(DBMysql::loginIntranet($_POST['usuario'], $_POST['contrasena'])) {
			header("Location: ../intranet/");
			exit();
		}
	} else {
		if(DBMysql::loginExtranet($_POST['usuario'], $_POST['contrasena'])) {
			header("Location: ../extranet/");
			exit();
		}
	} 
	header("Location: ../index.php");
    exit();
	
?>