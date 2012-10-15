<?php
	if(!isset($MOSTRAR)) {
		header("Location: formularioAlta.php");
		exit();
	}
        if(isset($_SESSION['ABMCliente']))
            $Cliente = unserialize($_SESSION['ABMCliente']);
?>
	<fieldset>
		<legend>ABM Cliente</legend>
		<form action="ABMCliente.php" method="POST">		  
			Nombre:
			<input type="text" name="txtNombre" value="<?php if(isset($Cliente)) echo $Cliente->getNombre(); ?>"><br>
			Apellido:
			<input type="text" name="txtApellido" value="<?php if(isset($Cliente)) echo $Cliente->getApellido(); ?>"><br>
			Direccion:
			<input type="text" name="txtDireccion" value="<?php if(isset($Cliente)) echo $Cliente->getDireccion(); ?>"><br>
                        Localidad:
                        <input type="text" name="txtLocalidad" value="<?php if(isset($Cliente)) echo $Cliente->getLocalidad(); ?>"><br>
			CUIT:
			<input type="text" name="txtCuit" value="<?php if(isset($Cliente)) echo $Cliente->getCuit(); ?>"><br>
			Sexo:			
			Masculino<input type="radio" name="txtSexo" value="M" checked="checked">			
			Femenino<input type="radio" name="txtSexo" value="F" <?php if(isset($Cliente) && $Cliente->getSexo() == "F") echo "checked='checked'"; ?>><br>			
			Telefono:
			<input type="text" name="txtTelefono" value="<?php if(isset($Cliente)) echo $Cliente->getTelefono(); ?>"><br>			
			<input name="aceptar" type="submit" value="Enviar">
                            
		</form>
		<div>
		<?php
			if(isset($error))
				echo implode(",<br>", $error);
		?>
		<div>
	</fieldset>
	