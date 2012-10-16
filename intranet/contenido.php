<?php 
	if(isset($_GET['sistema'])) {
		switch ($_GET['sistema']) {
		  case "1": $url = "sis_compras.php"; break;
		  case "2": $url = "sis_pedidos.php"; break; 
		  case "3": $url = "sis_personal.php"; break;
		  case "4": $url = "sis_rankingproductos.php"; break;
		}
	}
		
	if(isset($_GET['buscar']) && !empty($_GET['buscar']))
			$url = "../comunes/sis_busquedaproductos.php";		
 ?> 