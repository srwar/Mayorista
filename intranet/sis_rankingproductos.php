<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
                    <fieldset>
					<legend>RANKING DE PRODUCTOS</legend>
						<?php
							include("../model/DBMysql.php");
							include("../comunes/tabla.php");
							$cabeceras = array("CODIGO", "PRODUCTO", "CANTIDAD");
							$query = "SELECT * FROM ranking_productos;";
							$resultado = (new DBMysql())->consulta("charlsn", "charlsn", $query);
							graficarTabla($cabeceras, $resultado);
							
						
						?>
                    </fieldset>