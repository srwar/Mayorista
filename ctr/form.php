<?php   
   //Obtenemos la variable aceptar, para comprobar si ha pulsado el botón  
   //$aceptar = $_POST["aceptar"];  
   if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {  
      //incluimos el archivo de login anterior, en este caso 'login.php'  
      include("login2.php");  
      Login(); 
		//echo var_dump($_SESSION['cliente']);
		//si se ha conectado correctamente entrará en el if  
	  if(isset($_SESSION['usuario']) && isset($_SESSION['contrasena']) && isset($_SESSION['permiso'])) {  
		 header("Location: ../intranet/");  
		 exit();
	  } else if (isset($_SESSION['usuario']) && isset($_SESSION['contrasena'])){  
		 header("Location: ../extranet/");  
		 exit();
	  } else {  
		 header("Location: ../internet/principal.php");  
		 exit();
	  }     
   } else {  
     //redireccionamos a la misma página  
     header("Location ../index.php");  
	 exit();
   }
?>