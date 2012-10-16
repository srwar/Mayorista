<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
                    <fieldset>
					<legend>RANKING DE PRODUCTOS</legend>
						<?php
							include_once "../model/DBMysql.php";
							include_once "../comunes/tabla.php";
							$cabeceras = array("CODIGO", "PRODUCTO", "CANTIDAD");
							$query = "SELECT * FROM ranking_productos;";
							$resultado = DBMysql::consulta($query);
							graficarTabla($cabeceras, $resultado);												
						?>
                    </fieldset>