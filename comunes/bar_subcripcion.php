<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>		
		<div id="subcripcion">
			<fieldset>
				<legend>
					Suscribite
				</legend>
				<form name="subcripcion" action="subcripcion.php" method="POST">
					<br>
					<input type="text" name="subcripcion" value="Ingrese email" onFocus="quitarValue(this)">
					<input type="button" value="Enviar" onClick="validarSubcripcion(document.subcripcion)">
				</form> 
				<img src="../images/Correo.png" >
			</fieldset>
		</div>