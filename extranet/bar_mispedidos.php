<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>					
				<div id="miscomprasextranet">
					<fieldset id="">
						<legend>
							Mis Compras
						</legend> 
                       <a href="<?php echo $_SERVER['SCRIPT_NAME']. "?sistema=2"; ?>"><input type="button" id="botonmiscomprasextranet" value="Ingresar"></a>
                        
					</fieldset>
				</div>