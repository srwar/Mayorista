<?php
		if(isset($_GET['sistema'])) {
			if($_GET['sistema'] == "1")
				$url = "sis_hacerpedidos.php";
			if($_GET['sistema'] == "2")
				$url = "sis_mispedidos.php";	
		}
		
		if(isset($_GET['buscar']) && !empty($_GET['buscar']))
			$url = "../comunes/sis_busquedaproductos.php";
?>
