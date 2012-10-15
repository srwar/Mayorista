<?php
  class Utiles{
    /*
     * Suponiendo que vamos a recibir un numero como parametro,
     * vamos a validar dicha variable con la funcion isnumero() que internamente hara:
     *    Forzar a la variable $numero a un entero, que podria ser un numero o no.
     *    Asignar el resultado a una variable temporal llamada $varTemp
     *    Comparar el resultado el cual arrojara verdadero o falso dependiendo de dicha comparacion
     */
    
    static function isEntero($numero){
       $varTemp = (int) $numero;
       if($varTemp === $numero){
         return true;
       }else{
         return false;
       }
    }
    /*
     * 
     */
    static function isFlotante($numero){
      $varTemp = (Double) $numero;
      if($varTemp === $numero){
        return true;
      }else{
        return false;
      }
    }
    
    static function isMedidaCorrecta($llave){
      $unidadesDeMedida = array(
        "kg" => "Kilogramo",
        "gr" => "Gramo",
        "lt" => "Litro",
        "ml" => "mL",
        "cm" => "cm3"
      );
      
      if(array_key_exists($unidadesDeMedida, $llave)){
          return true;
      }else{
          return false;
      }
    }
  }
?>
