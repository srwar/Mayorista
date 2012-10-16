<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
				<fieldset>
					<legend>
						OFERTAS DE LA SEMANA
					</legend>
					<!--###############################################-->
						<?php 																			
							include_once "../model/DBMysql.php";
							include_once "../comunes/tabla.php";
							$cabeceras = array("CODIGO", "PRODUCTO", "DESCRIPCION", "PRECIO");
							$query = "SELECT * FROM productos_oferta;";							
							$resultado = DBMysql::consulta($query);
							graficarTabla($cabeceras, $resultado);
						?>
						
					<!--###############################################--> 
				</fieldset>