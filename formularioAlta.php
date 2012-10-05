<html>
  <head>
    <title>Formulario de alta de clientes</title>
  </head>
  <body>
    <?php 
      if(isset($error)){
          echo $error;
      }
    ?>
    <form action="controlForm.php" method="post">
      <fieldset>
        <legend>Datos personales</legend>
        Nombre:
        <input type="txt" name="txtNombre">
        Apellido:
        <input type="txt" name="txtApellido">
        Direccion:
        <input type="txt" name="txtDireccion">
        CUIT:
        <input type="txt" name="txtCuit">
        Sexo:
        <input type="radio" name="txtSexo" value="M">
        <input type="radio"name="txtSexo" value="F">
        Telefono:
        <input type="txt" name="txtTelefono">
        
        <input name="aceptar" type="submit" value="enviarForm">
      </fieldset>
    </form>
  </body>
</html>
