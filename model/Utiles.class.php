<?php

  class Utiles {
 
    static function isEntero($numero){
      
       $varTemp = (int) $numero;
       if($varTemp === $numero){
         return true;
       }else{
         return false;
       }
    }
    
    static function isFlotante($numero){
      $varTemp = (Double) $numero;
      if($varTemp === $numero){
        return true;
      }else{
        return false;
      }
    }
    
    static function isMedidaCorrecta($llave,$array){
      if(array_key_exists($llave,$array)){
          return true;
      }else{
          return false;
      }
    }
    
    static function nombreEmpleadoValido($nombre){
      if(!preg_match('/^[a-z]{4,28}$/i',$nombre)) {
			  return false;
		  }else{
        return true;
      }
    }
    
    static function nombreProductoValido($nombre){
      if(!preg_match("/^[a-zA-Z0-9]*$/",$nombre)) {
			  return false;
		  }else{
        return true;
      }
    }
    
    static function esCodigoValido($codigo){
     if(!preg_match("/^[0-9]{1}-[0-9]{3}-[0-9]{3}/",$codigo)) {
		return false;
	 }else{
        return true;
      }
    }
    
    
  
  }
  

?>
