<?php

  $unidadesDeMedida = array(
      "kg" => "Kilogramo",
      "gr" => "Gramo",
      "lt" => "Litro",
      "ml" => "mL",
      "cm" => "cm3"
  );

  error_reporting(E_ALL);
  ini_set("display_errors", true);

  if (count($_POST)){
      
      if(empty($_POST['txtCodigo'])){
          $error = "Ingrese codigo producto </br>";
      }
      if(empty($_POST['txtStock'])){
          $error = $error."Ingrese stock del nuevo producto </br>";
      }
      if(empty($_POST['txtPrecio'])){
          $error = $error."Ingrese el precio </br>";
      }
      if(empty($_POST['txtNombre'])){
          $error = $error."Ingrese nombre del producto  </br>";
      }
      
      if(empty($_POST['txtCantidad'])){
          $error = $error."Ingrese la cantidad del producto </br>";
      }
      if(empty($_POST['txtTamano'])){
          $error = $error."Ingrese su numero de telefono </br>";
      }
      if(empty($_POST['txtUnidad'])){
          $error = $error."Seleccione una unidad de medida para el nuevo producto </br>";
      }
      if(isset($error)){
          require'formAltaProducto.php';
      }else{
          header("Location: altaExitosa.php");
      }
  }else{
      require'formAltaProducto.php';
  }
?>