<?php 
	if(!isset($url)) {
		header("Location: principal.php");
		exit();
	} 
	header("Content-Type: text/html; charset=UTF-8"); 
	$MOSTRAR = false;	
?>
<html>
	<head>
       	<title>	
			Tu Distribuidora
        </title>
        <?php	
			#Se incluyen los scripts y los estilos
			require 'cabeceras.php'; 
		?>
    </head>
    
    <body>	
    	<div class="header">        
	        <?php 	
				#Se incluye las el Logo y la parte de Logueo
				require 'head.php';
			?>
        </div>
		
        <?php 
			#Se incluyen la barra de menu
			require 'menu.php'; 
		?>
		
		<div id="centro">
		<div id="bar-izq">
			<div id="contenido">
				<?php 	
					# El contenido puede cambiar 
					require "$url";                                       
                ?>
			</div>			
		</div>   
	
		<div id="bar-der">
			<?php 
				#Se incluyen las barras laterales "widget"
				require 'bar_compras.php';
				require 'bar_pedidos.php';
				require 'bar_personal.php';
				require 'bar_rankingproductos.php';
				require '../comunes/bar_busquedaproductos.php';				
			?>										
		</div>
		</div>		
		<?php 	
			#Se incluye el pie de la pagina
			require '../comunes/pie.php';			
		?>
    </body>
</html>
