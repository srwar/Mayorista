    <?php
		if(!isset($MOSTRAR)) {
			header("Location: CtrABMProducto.php");
			exit();
		}
		if(isset($_SESSION['ABMProducto'])) {
			$Producto = unserialize($_SESSION['ABMProducto']);
		}	
	?>	
	<fieldset>	
        <legend>ABM Producto</legend>
		<form action="CtrABMProducto.php" method="post">	
			Codigo:
			<input type="text" name="txtCodigo" value="<?php if(isset($Producto)) echo $Producto->getCodigo(); ?>"><br>
			Stock:
			<input type="text" name="txtStock" value="<?php if(isset($Producto)) echo $Producto->getStock(); ?>"><br>
			Stock Minimo:
			<input type="text" name="txtStockMinimo" value="<?php if(isset($Producto)) echo $Producto->getStock_Min(); ?>"><br>
			Precio:
			<input type="text" name="txtPrecio" value="<?php if(isset($Producto)) echo $Producto->getPrecio(); ?>"><br>
			Nombre:
			<input type="text" name="txtNombre" value="<?php if(isset($Producto)) echo $Producto->getNombre(); ?>"><br>
			Cantidad:
			<input type="text" name="txtCantidad" value="<?php if(isset($Producto)) echo $Producto->getP_cantidad(); ?>"><br>
			Tama&ntilde;o:
			<input type="text" name="txtTamanio" value="<?php if(isset($Producto)) echo $Producto->getP_tamanio(); ?>"><br>
			Unidad de medida:
			<select name="txtUnidadMedida">
				<option> - </option>
				<?php 
					foreach($unidadesDeMedida as $clave => $valor) {
						if(isset($Producto) && $Producto->getP_unidad_medida() == $clave)
							echo "<option value='$clave' selected='selected'> $valor</option>";
						else
							echo "<option value='$clave'> $valor</option>";
					}
				?>
			</select><br>
			Categoria:
			<select name="txtCategoria">
				<option> - </option>
				<?php 
					foreach($categoria as $clave => $valor) {
						if(isset($Producto) && $Producto->getCategoria() == $clave)
							echo "<option value='$clave' selected='selected'> $valor</option>";
						else
							echo "<option value='$clave'> $valor</option>";
					}		
				?>
			</select><br>
			Proveedor:
			<input type="text" name="txtProveedor" value="<?php if(isset($Producto)) echo $Producto->getProveedor(); ?>"><br>
			Oferta: 
			SI<input type="radio" name="txtOferta" value="1" <?php if(isset($Producto) && $Producto->getOferta() == "1") echo "checked='checked'"; ?>>
			NO<input type="radio" name="txtOferta" value="0" checked="checked"><br>
			
			<input type="submit" name="aceptar" value="Aceptar">
		</form>
		<div>
		<?php
			if(isset($error))
				echo implode(",<br>", $error);
		?>
		<div>
    </fieldset>    