<html>
  <head>
    <title>Entrar a la pagina</title>
  </head>
  <body>
    <?php
       if(isset($errors)){
         echo $errors;
       }
    ?>
    
    <form action="controlador.php" method="post">
      <fieldset>      
        <legend>Ingreso</legend>
        Usuario:
        <input type="txt" name="txtUsuario">
        Contraseña:
        <input type="password" name="txtContra">
        <input type="submit" value="Ingresar">
      </fieldset>
    </form>
  </body>
</html>
