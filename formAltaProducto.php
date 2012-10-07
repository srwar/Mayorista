<html>
  <head>
    <title>Formulario - Alta Producto</title>
  </head>
  <body>
    <form action="controlFormProd.php" method="post">
      <fieldset>
        <legend>Datos del producto</legend>
        Codigo:
        <input type="txt" name="txtCodigo">
        Stock:
        <input type="txt" name="txtStock">
        Precio:
        <input type="txt" name="txtPrecio">
        Nombre:
        <input type="txt" name="txtNombre">
        Cantidad:
        <input type="txt" name="txtCantidad">
        Tama&ntilde;o:
        <input type="txt" name="txtTamano">
        Unidad de medida:
        <select name="txtUnidad">
          <option>
            <?php foreach($unidadesDeMedida as $clave => $valor){ ?>
              <option value=<?php echo $clave;?> > <?php echo $valor; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Aceptar">
      </fieldset>
    </form>
  </body>
</html>
