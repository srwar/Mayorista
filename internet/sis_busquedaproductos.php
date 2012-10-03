<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
			<?php				
				$producto = $_GET['buscar'];
				if(preg_match("/[\w]{3,20}+/", $producto))
					$valid = true;
				else {
					header("Location: ". $_SERVER['SCRIPT_NAME']);
					exit();
				}			
				if($valid) {	
					include("../ctr/conectardb.php");
					$connection = Conectarse();
					$query = "SELECT codigo, nombre, p_cantidad, p_tamanio, p_unidad_medida, precio FROM producto WHERE nombre LIKE '%". $producto ."%';";
					$resultado = mysql_query($query, $connection);						
				}
			?>
			<fieldset>
				<legend>
					Productos Encontrados <?php if($valid) echo mysql_num_rows($resultado); ?>
				</legend> 
				<?php
					if($valid) {
						include("tabla.php");
						graficarTabla($resultado);
					}					
				?>
			</fieldset>
		