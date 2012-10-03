<?php   
	function Conectarse()   
	{   
	   //servidor = direccion del servidor  
	   //user = usuario de la base de datos  
	   //pass = contraseña de la base de datos  
	   if (!($conection=mysql_connect("localhost","charlsn","charlsn"))) {   
		  echo "Error conectando a la base de datos.";   
		  exit();   
	   }  
	   if (!mysql_select_db("Mayorista",$conection))   
	   {    
		  echo "Error seleccionando la base de datos.";   
		  exit();   
	   }   
	   return $conection;   
	}  
	
	
?> 