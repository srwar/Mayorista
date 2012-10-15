<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
		<div class="menu">
        	<ul>
            	<li><a href="principal.php">Inicio</a></li>
                <li><a href="empresa.php">La Empresa</a></li>
                <li><a href="atencion_cliente.php">Atencion al Cliente</a></li>                
				<?php
					if(isset($_SESSION['Empleado'])) {						
						$Empleado = unserialize($_SESSION['Empleado']);
						if($Empleado->getPermiso() == 1) {
							//echo "<li><a href='ABMClienteV.php'>ABM Cliente</a></li>";
							echo "<li><a href='ABMProductoV.php'>ABM Producto</a></li>";
						}
					}
				?>
            </ul>
        </div>