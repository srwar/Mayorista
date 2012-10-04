<html>
  <head>
    <title>Formulario de alta de clientes</title>
  </head>
  <body>
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
        <input type="radio" name="sexo" value="M">
        <input type="radio"name="sexo" value="F">
        Telefono:
        <input type="txt" name="txtTelefono">
        
        <input type="submit" value="enviarForm"
      </fieldset>
    </form>
  </body>
</html>
