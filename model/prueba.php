<?php
  error_reporting(E_ALL);
  ini_set("display_errors", true);
  include("Utiles.class.php");
  
  //echo var_dump(Utiles::esCodigoValido("000-0-000"));
  
  //echo var_dump(Utiles::isEntero(12.0));
 
  //echo var_dump(Utiles::isFlotante(12));
  /*$unidadesDeMedida = array(
      "kg" => "Kilogramo",
      "gr" => "Gramo",
      "lt" => "Litro",
      "ml" => "mL",
      "cm" => "cm3"
  );*/

  //echo var_dump(Utiles::isMedidaCorrecta("kgp",$unidadesDeMedida));
  //$asd = "654";
  //echo var_dump(Utiles::nombreEmpleadoValido("pepe"));
  
  echo var_dump(Utiles::nombreProductoValido("producto54654"));
 
?>
