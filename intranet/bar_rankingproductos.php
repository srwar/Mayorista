<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
				<div id="ranking">
					<fieldset>
						<legend>
							Ranking de Productos
						</legend> 
                      	<a href="<?php echo $_SERVER['SCRIPT_NAME']. "?sistema=4"; ?>"><input type="button" id="botonranking" value="Ingresar"></a>              
					</fieldset>
				</div>
