<?php  
   //session_name("Mayorista");
   
   function Login() {  
      //Incluimos el archivo de conexión (en este caso se llama Conexion.inc)   
      include("conectardb.php");  
      //Obtenemos la conexión llamando a la función Contectarse();  
      $link=Conectarse();  
      //los siguientes $_POST los obtenemos mediante un formulario poniendo  
      //en la propiedad action la opción action = "post"  
      $usuario = $_POST["usuario"];   
      $contrasena = $_POST["contrasena"];   
      //en la query compruebas que el usuario exista en la base de datos  
      $query="select usuario, contrasena from usuarios_extranet where usuario = '$usuario'";  
	  mysql_select_db("Mayorista",$link);  
      $result= mysql_query($query, $link);
      //Entrará en el if si ha encontrado algún resultado  
      if(mysql_num_rows($result)!=0){  
         $array=mysql_fetch_array($result);  
         //comprueba que la contraseña sea correcta  
         //el md5 es un sistema de encriptación, si no está encriptada  
         //sólo tendréis que quitar el md5 y dejar solo la variable  
         if($array["contrasena"] == $contrasena) {
			session_name("Mayorista");
			session_start();  
            $_SESSION["usuario"] = $usuario;  
            $_SESSION["contrasena"] = md5($contrasena);  
            //la variable $array contiene todos los datos de la base de datos  
            //para obtenerlos solamente hay que poner entre los corchetes   
            //el nombre de la columna  
            //$_SESSION["nombre"] = $array["Nombre"];  
            //$_SESSION["apellidos"]=$array["Apellidos"];  
            //$_SESSION["email"]=$array["Email"];  
            //y cogemos todos los datos que queremos de la base de datos  
            //session_register($_SESSION);  
         }  
      }  
   }  
?> 