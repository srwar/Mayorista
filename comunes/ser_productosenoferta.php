<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
				<fieldset>
					<legend>
						OFERTAS DE LA SEMANA
					</legend>
					<!--###############################################-->
						<?php 																			
							//include("../model/DBMysql.php");
							include("../comunes/tabla.php");
							$cabeceras = array("CODIGO", "PRODUCTO", "DESCRIPCION", "PRECIO");
							$query = "SELECT * FROM productos_oferta;";							
							$resultado = DBMysql::consulta("charlsn", "charlsn", $query);
							graficarTabla($cabeceras, $resultado);
						?>
						
					<!--###############################################--> 
				</fieldset>