<?php  
   //session_name("Mayorista");
   
   function Login() {  
      //Incluimos el archivo de conexi�n (en este caso se llama Conexion.inc)   
      include("conectardb.php");  
      //Obtenemos la conexi�n llamando a la funci�n Contectarse();  
      $link=Conectarse();  
      //los siguientes $_POST los obtenemos mediante un formulario poniendo  
      //en la propiedad action la opci�n action = "post"  
      $usuario = $_POST["usuario"];   
      $contrasena = $_POST["contrasena"];   
      //en la query compruebas que el usuario exista en la base de datos  
      $query="select usuario, contrasena from usuarios_extranet where usuario = '$usuario'";  
	  mysql_select_db("Mayorista",$link);  
      $result= mysql_query($query, $link);
      //Entrar� en el if si ha encontrado alg�n resultado  
      if(mysql_num_rows($result)!=0){  
         $array=mysql_fetch_array($result);  
         //comprueba que la contrase�a sea correcta  
         //el md5 es un sistema de encriptaci�n, si no est� encriptada  
         //s�lo tendr�is que quitar el md5 y dejar solo la variable  
         if($array["contrasena"] == $contrasena) {
			session_name("Mayorista");
			session_start();  
            $_SESSION["usuario"] = $usuario;  
            $_SESSION["contrasena"] = md5($contrasena); 
			include("../model/Cliente.class.php");
			$data = mysql_query("SELECT * FROM cliente WHERE cuit = '". $usuario ."';",$link);
			$array = mysql_fetch_assoc($data);
			$cliente = new Cliente($array['cuit'], $array['apellido'], $array['nombre'], $array['sexo']);
			//echo var_dump($cliente)."<br>";
			$_SESSION['cliente'] = serialize($cliente);			
         }  
      }  
   }  
?> 