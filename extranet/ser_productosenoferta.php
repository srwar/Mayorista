<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
				<fieldset>
					<legend>
						OFERTAS DE LA SEMANA
					</legend>
					<!--###############################################-->
						<?php 
							include ("../ctr/conectardb.php");	
							$link = Conectarse();	
							$cabeceras = array("Codigo", "Nombre", "Descripcion", "Precio");
							$query = "SELECT codigo, nombre, concat(p_cantidad, ' x ', p_tamanio, ' ', p_unidad_medida ), precio FROM producto WHERE oferta = '1';";
							$resultado = mysql_query($query, $link);
							include("../comunes/tabla.php");
							graficarTabla($cabeceras,$resultado);
						?>
						
					<!--###############################################--> 
				</fieldset>