<?php
/*  
  $unidadesDeMedida = array(
      "0" => "-----------",
      "1" => "Kilogramo",
      "2" => "Gramo",
      "3" => "Litro",
      "4" => "mL",
      "5" => "cm3"
  );
  */
  error_reporting(E_ALL);
  ini_set("display_errors", true);

  if (count($_POST)){
      
      /*
       * txtNombre----X
       * txtApellido--X
       * txtDireccion-X
       * txtCuit------X
       * txtTelefono--x
       * 
       */
      if(empty($_POST['txtNombre'])){
          $error = "Ingrese su nombre </br>";
      }
      if(empty($_POST['txtApellido'])){
          $error = $error."Ingrese su Apellido </br>";
      }
      if(empty($_POST['txtDireccion'])){
          $error = $error."Ingrese su direccion </br>";
      }
      if(empty($_POST['txtCuit'])){
          $error = $error."Ingrese su CUIT </br>";
      }
      
      if(empty($_POST['txtSexo'])){
          $error = $error."Seleccione sexo: F o M </br>";
      }
      if(empty($_POST['txtTelefono'])){
          $error = $error."Ingrese su numero de telefono </br>";
      }
      
      if(isset($error)){
          require'formAltaCliente.php';
      }else{
          header("Location: altaExitosa.php");
      }
  }else{
      require'formAltaCliente.php';
  }
?>
