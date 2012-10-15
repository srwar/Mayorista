<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>			
	<fieldset>		
		<legend> OPCIONES </legend>
		<?php 
			if(isset($_SESSION['error'])) {
				echo $_SESSION['error'];	
				unset($_SESSION['error']);
			}
		?>
		<form action="CtrABMProductoSession.php" method="POST">
			CODIGO PRODUCTO: <input name="producto" type="text"><br>
			ALTA: <input type="radio" name="ABM" value="ALTA">
			ALTA EN BAJAS: <input type="radio" name="ABM" value="ALTAENBAJA">
			BAJA: <input type="radio" name="ABM" value="BAJA">
			MODIFICACION: <input type="radio" name="ABM" value="MODIFICACION">			
			<input type="submit" name="aceptar" value="Enviar">
		</form>
	</fieldset>