<?php		
	if(isset($_POST) && isset($_POST['aceptar'])) {
		include("../comunes/session_start.php");
		include("../model/Empleado.class.php");
		$empleado = unserialize($_SESSION['Empleado']);
		$empleado->puedoEstarAqui(1);
		include ("ABMProducto.class.php");
		include("../model/DBMysql.php");
		
		if(isset($_POST['ABM']) && $_POST['ABM'] == "MODIFICACION" && isset($_POST['producto'])) {				
				$codigo = $_POST['producto'];				
				$resultado = DBMysql::consulta("charlsn", "charlsn", "SELECT codigo, stock, stock_min, precio, nombre, p_cantidad, p_tamanio, p_unidad_medida, categoria, proveedor, oferta FROM producto WHERE codigo = '". $codigo ."' AND activo = 1;");				
				if($resultado->num_rows == 0) {
					$_SESSION['error'] = "Producto: $codigo no  existe!!";
					header("Location: ABMProductoV.php");
					exit();
				}
				$row = $resultado->fetch_assoc();				
				$Producto = new ABMProducto($row['codigo'], $row['stock'], $row['stock_min'], $row['precio'],$row['nombre'], $row['p_cantidad'], $row['p_tamanio'], $row['p_unidad_medida'], $row['categoria'], $row['proveedor'], $row['oferta']);
				$_SESSION['ABMProducto'] = serialize($Producto);	
				$_SESSION['ABM'] = $_POST['ABM'];
				$_SESSION['producto'] = $codigo;
				
		}
		
		if(isset($_POST['ABM']) && $_POST['ABM'] == "ALTAENBAJA" && isset($_POST['producto'])) {
				$codigo = $_POST['producto'];
				$resultado = DBMysql::consulta("charlsn", "charlsn", "SELECT codigo, stock, stock_min, precio, nombre, p_cantidad, p_tamanio, p_unidad_medida, categoria, proveedor, oferta FROM producto WHERE codigo = '". $codigo ."' AND activo = 0;");
				
				if($resultado->num_rows == 0) {
					$_SESSION['error'] = "Producto: $codigo en BAJA no existe!!";
					header("Location: ABMProductoV.php");
					exit();
				} else {
					$row = $resultado->fetch_assoc();
					$Producto = new ABMProducto($row['codigo'], $row['stock'], $row['stock_min'], $row['precio'],$row['nombre'], $row['p_cantidad'], $row['p_tamanio'], $row['p_unidad_medida'], $row['categoria'], $row['proveedor'], $row['oferta']);
					$_SESSION['ABMProducto'] = serialize($Producto);	
					$_SESSION['ABM'] = $_POST['ABM'];
					$_SESSION['producto'] = $codigo;					
				}
		}
		
		if(isset($_POST['ABM']) && $_POST['ABM'] == "ALTA" && isset($_POST['producto'])) {
				$codigo = $_POST['producto'];
				$resultado = DBMysql::consulta("charlsn", "charlsn", "SELECT 1 FROM producto WHERE codigo = '". $codigo ."' AND activo = 1;");
				
				if($resultado->num_rows != 0) {
					$_SESSION['error'] = "Producto: $codigo ya existe!!";
					header("Location: ABMProductoV.php");
					exit();
				} else {						
					$Producto = new ABMProducto($codigo, "", "", "", "", "", "", "", "", "", "");
					$_SESSION['ABMProducto'] = serialize($Producto);	
					$_SESSION['ABM'] = $_POST['ABM'];
					$_SESSION['producto'] = $codigo;					
				}
		}
		
		if(isset($_POST['ABM']) && $_POST['ABM'] == "BAJA" && isset($_POST['producto'])) {
				$codigo = $_POST['producto'];
				$resultado = DBMysql::consulta("charlsn", "charlsn", "SELECT codigo, stock, stock_min, precio, nombre, p_cantidad, p_tamanio, p_unidad_medida, categoria, proveedor, oferta FROM producto WHERE codigo = '". $codigo ."' AND activo = 1;");
				
				if($resultado->num_rows == 0) {
					$_SESSION['error'] = "Producto: $codigo no existe!!";
					header("Location: ABMProductoV.php");
					exit();
				} else {
					$row = $resultado->fetch_assoc();
					$Producto = new ABMProducto($row['codigo'], $row['stock'], $row['stock_min'], $row['precio'],$row['nombre'], $row['p_cantidad'], $row['p_tamanio'], $row['p_unidad_medida'], $row['categoria'], $row['proveedor'], $row['oferta']);
					$_SESSION['ABMProducto'] = serialize($Producto);	
					$_SESSION['ABM'] = $_POST['ABM'];
					$_SESSION['producto'] = $codigo;					
				}			
		}
		header("Location: ABMProductoV.php");
		exit();
	
	}
	header("Location: index.php");
	exit();
?>