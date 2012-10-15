<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>		
		<div id="productos">
			<fieldset>
				<legend>
					Busqueda de Productos
				</legend> 
				<form name="buscarProductos" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="GET">
					<br>
					<input name="buscar" type="text" value="<?php if(isset($_GET['buscar'])) echo $_GET['buscar']; else echo "Ingrese Producto"; ?>" onFocus="quitarValue(this)">
					<input type="submit" value="Enviar" onClick="validarBusqueda(document.buscarProductos)">					
				</form>
				<img src="../images/Search.png" >
			</fieldset>
		</div>