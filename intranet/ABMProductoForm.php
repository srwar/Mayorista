    <?php
		if(!isset($MOSTRAR)) {
			header("Location: ABMProductoV.php");
			exit();
		}
		if(isset($_SESSION['ABMProducto'])) {
			$Producto = unserialize($_SESSION['ABMProducto']);
		}	
		
		if($_SESSION['ABM'] == "BAJA" || $_SESSION['ABM'] == "ALTAENBAJA") {
			//$disabled = false;
		}
	?>	
	<fieldset>
		<script>
			function sacarDisabled() {
				Form = document.form.ABMProducto;
				Form
			}
		</script>
        <legend><?php  echo $_SESSION['ABM'] ." PRODUCTO ".$_SESSION['producto'] ?></legend>
		<?php if(isset($_SESSION['error'])) echo $_SESSION['error']; ?>
		<form name="ABMProduto" action="ABMProductoV.php" method="post" onSubmit="sacarDisabled()">	
			Codigo:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtCodigo" value="<?php  echo $Producto->getCodigo(); ?>"><br>
			Stock:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtStock" value="<?php  echo $Producto->getStock(); ?>"><br>
			Stock Minimo:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtStockMinimo" value="<?php  echo $Producto->getStock_Min(); ?>"><br>
			Precio:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtPrecio" value="<?php  echo $Producto->getPrecio(); ?>"><br>
			Nombre:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtNombre" value="<?php  echo $Producto->getNombre(); ?>"><br>
			Cantidad:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtCantidad" value="<?php  echo $Producto->getP_cantidad(); ?>"><br>
			Tama&ntilde;o:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ;?> name="txtTamanio" value="<?php  echo $Producto->getP_tamanio(); ?>"><br>
			Unidad de medida:
			<select <?php if(isset($disabled)) echo "disabled" ;?> name="txtUnidadMedida">
				<option> - </option>
				<?php 
					foreach($unidadesDeMedida as $clave => $valor) {
						if($Producto->getP_unidad_medida() == $clave)
							echo "<option value='$clave' selected='selected'> $valor</option>";
						else
							echo "<option value='$clave'> $valor</option>";
					}
				?>
			</select><br>
			Categoria:
			<select <?php if(isset($disabled)) echo "disabled" ;?> name="txtCategoria">
				<option> - </option>
				<?php 
					foreach($categoria as $clave => $valor) {
						if($Producto->getCategoria() == $clave)
							echo "<option value='$clave' selected='selected'> $valor</option>";
						else
							echo "<option value='$clave'> $valor</option>";
					}		
				?>
			</select><br>
			Proveedor:
			<input type="text" <?php if(isset($disabled)) echo "disabled" ; ?> name="txtProveedor" value="<?php  echo $Producto->getProveedor(); ?>"><br>
			Oferta: 
			SI<input type="radio" <?php if(isset($disabled)) echo "disabled" ;?> name="txtOferta" value="1" <?php if ($Producto->getOferta() == "1") echo "checked='checked'"; ?>>
			NO<input type="radio" <?php if(isset($disabled)) echo "disabled" ;?> name="txtOferta" value="0" <?php if ($Producto->getOferta() == "0") echo "checked='checked'"; ?>><br>
			
			<input type="submit" name="aceptar" value="Aceptar">
			<input type="submit" name="cancelar" value="Cancelar">
		</form>
		<div>
		<?php
			if(isset($error))
				echo implode(",<br>", $error);
		?>
		<div>
    </fieldset>    