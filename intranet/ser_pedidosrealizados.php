<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
                    <fieldset>
                      <legend>PEDIDOS REALIZADOS</legend>
                        <?php
							include("../model/DBMysql.php");
							include("../comunes/tabla.php");
							$query = "SELECT * FROM pedidos_realizados;";
							$resultado = DBMysql::consulta($query);
							$headers = array("N| PEDIDO", "CLIENTE" , "FECHA SOLICITUD");							
							graficarTabla($headers,$resultado);
						?>
					</fieldset>            
                