<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
			<?php				
				$producto = $_GET['buscar'];
				if(preg_match("/[\w]{3,20}+/", $producto)) {
					$valid = true;					
				}
				else {
					$valid = false;
					$error = "Ingrese un nombre de producto valido!!";
					//header("Location: ". $_SERVER['SCRIPT_NAME']);
					//exit();
				}			
				if($valid) {																
						include_once "../model/DBMysql.php";                                                
						include_once "../comunes/tabla.php";
						$cabeceras = array("Codigo", "Nombre", "Descripcion", "Precio");
						$query = "SELECT codigo, nombre, concat(p_cantidad, ' x ', p_tamanio, ' ', p_unidad_medida ), precio FROM producto WHERE nombre LIKE '%". $producto ."%';";
						$resultado = DBMysql::consulta($query);						
				}
			?>
			<fieldset>
				<legend>
					Productos Encontrados
				</legend> 
				<?php
					if($valid) {						
						graficarTabla($cabeceras, $resultado);
					}					
				?>
			</fieldset>
		