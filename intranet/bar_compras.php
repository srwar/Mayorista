<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
				<div id="compras">
					<fieldset id="">
						<legend>
							Compras
						</legend> 
                       	<a href="<?php echo $_SERVER['SCRIPT_NAME']. "?sistema=1"; ?>"><input type="button" id="botoncompras" value="Ingresar"></a>
                        
					</fieldset>
				</div>
