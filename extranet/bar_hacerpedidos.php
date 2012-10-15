<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
				<div id="pedidosextranet">
					<fieldset id="">
						<legend>
							Hacer Pedidos
						</legend> 
                       	<a href="<?php echo $_SERVER['SCRIPT_NAME']. "?sistema=1"; ?>"><input type="button" id="botonpedidosextranet" value="Ingresar"></a>
                        
					</fieldset>
				</div>