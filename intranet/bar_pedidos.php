<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
				<div id="pedidos">
					<fieldset id="">
						<legend>
							Pedidos
						</legend> 
                       <a href="<?php echo $_SERVER['SCRIPT_NAME']. "?sistema=2"; ?>"><input type="button" id="botonpedidos" value="Ingresar"></a>                        
					</fieldset>
				</div>
