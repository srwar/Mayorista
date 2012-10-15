<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>	
				<div id="personal">
					<fieldset id="">
						<legend>
							Personal
						</legend>                     
                        <a href="<?php echo $_SERVER['SCRIPT_NAME']. "?sistema=3"; ?>"><input type="button" id="botonpersonal" value="Ingresar"></a>
					</fieldset>
				</div>