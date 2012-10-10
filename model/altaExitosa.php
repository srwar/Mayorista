<?php
		session_name("Mayorista");
		session_start();
		
		if(isset($_SESSION['ABMCliente']))
			unset($_SESSION['ABMCliente']);
		if(isset($_SESSION['ABMProducto']))
			unset($_SESSION['ABMProducto']);
?>
<html>
    <head>
        <title>Alta Cliente</title>
    </head>
    <body>
        <h2>Alta realizada con exito.!</h2>
        <h1>Todos los datos ingresados son validos.</h1>
    </body>
</html>
