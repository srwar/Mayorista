<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
				<fieldset>
					<legend>
						OFERTAS DE LA SEMANA
					</legend>
					<!--###############################################-->
						<?php 
							include ("../ctr/conectardb.php");	
							$link = Conectarse();	
							$query = "SELECT codigo, nombre, p_cantidad, p_tamanio, p_unidad_medida, precio FROM producto WHERE oferta = '1';";
							$resultado = mysql_query($query, $link);
							include("tabla.php");
							graficarTabla($resultado);
						?>
						
					<!--###############################################--> 
				</fieldset>