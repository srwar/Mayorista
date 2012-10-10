    <fieldset>
        <legend>ABM Producto</legend>
		<form action="controlFormProd.php" method="post">	
        Codigo:
        <input type="txt" name="txtCodigo"><br>
        Stock:
        <input type="txt" name="txtStock"><br>
        Precio:
        <input type="txt" name="txtPrecio"><br>
        Nombre:
        <input type="txt" name="txtNombre"><br>
        Cantidad:
        <input type="txt" name="txtCantidad"><br>
        Tama&ntilde;o:
        <input type="txt" name="txtTamano"><br>
        Unidad de medida:
        <select name="txtUnidad">
            <?php foreach($unidadesDeMedida as $clave => $valor) 
              echo "<option value='$clave'> $valor</option>";
            ?>
        </select><br>          
        <input type="submit" value="Aceptar">
    </fieldset>    