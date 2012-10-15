<?php	
			if(!isset($MOSTRAR)) { header("Location: ABMProductoV.php"); exit(); }
			$empleado->puedoEstarAqui(1);
			$empleado = unserialize($_SESSION['Empleado']);
			switch($_SESSION['ABM']) {
				case "BAJA":
					$resultado = DBMysql::consulta($empleado->getDni(), $empleado->getContrasena(), "UPDATE producto SET activo = 0 WHERE codigo = '". $Producto->getCodigo() ."';");
					if($resultado) {
						$_SESSION['error'] = "Producto ". $Producto->getCodigo() ." fue dado de BAJA!!";
						$OK = true;
					}
					else
						$_SESSION['error'] = "Producto ". $Producto->getCodigo() ." error  al dar BAJA!!";					
				break;
				case "ALTA": 
					$query = "INSERT INTO producto VALUES ('". $Producto->getCodigo() ."', ". $Producto->getStock() .", ". $Producto->getStock_min() .", ". $Producto->getPrecio() .", '". $Producto->getNombre() ."', ". $Producto->getP_cantidad() .", ". $Producto->getP_tamanio() .", '". $Producto->getP_unidad_medida() ."', ". $Producto->getCategoria() .", ". $Producto->getProveedor() .", ". $Producto->getOferta() .", 1);";
					$resultado = DBMysql::consulta($empleado->getDni(), $empleado->getContrasena(), $query);
					if($resultado) {
						$_SESSION['error'] = "Producto ". $Producto->getCodigo() ." dado de ALTA";
						$OK = true;
					} else {
						$_SESSION['error'] = "Error al dar de ALTA el producto ". $Producto->getCodigo() ."$query ". var_dump($resultado);
					}					
				break;
				case "MODIFICACION":
					$query = "UPDATE producto SET codigo = '". $Producto->getCodigo() ."', stock = ". $Producto->getStock() .", stock_min = ". $Producto->getStock_min() .", precio = ". $Producto->getPrecio() .", nombre = '". $Producto->getNombre() ."', p_cantidad = ". $Producto->getP_cantidad() .", p_tamanio = ". $Producto->getP_tamanio() .", p_unidad_medida = '". $Producto->getP_unidad_medida() ."', categoria = ". $Producto->getCategoria() .", proveedor = ". $Producto->getProveedor() .", oferta = ". $Producto->getOferta() ." WHERE codigo = '". $Producto->getCodigo() ."';";
					$resultado = DBMysql::consulta($empleado->getDni(), $empleado->getContrasena(), $query);
					if($resultado) {
						$_SESSION['error'] = "Producto ". $Producto->getCodigo() ." MODIFICADO!!";
						$OK = true;
					} else {
						$_SESSION['error'] = "Error al MODIFICAR el producto ". $Producto->getCodigo() ."$query ". var_dump($resultado);
					}	
				break;
				case "ALTAENBAJA":
					$query = "UPDATE producto SET activo = 1 WHERE codigo = '". $Producto->getCodigo() ."';";
					$resultado = DBMysql::consulta($empleado->getDni(), $empleado->getContrasena(), $query);
					if($resultado) {
						$_SESSION['error'] = "Producto ". $Producto->getCodigo() ." de BAJA en ALTA !!";
						$OK = true;
					} else {
						$_SESSION['error'] = "Error de BAJA en ALTA producto ". $Producto->getCodigo() ."$query ". var_dump($resultado);
					}
				break;
			}
			
			if($OK) {
				unset($_SESSION['ABMProducto']);
				unset($_SESSION['ABM']);
				unset($_SESSION['producto']);
			}
			header("Location: ABMProductoV.php");
			exit();
?>