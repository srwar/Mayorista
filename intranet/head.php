<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
			<div id="logo"> 
            	<a href="principal.php"><img src="../images/Logo.png" alt="Logo Mayorista"></a>
            </div>
            <?php 				
				if(isset($_SESSION['Empleado'])) { 
			?>
       		<div class="usuario">
            	<?php
				include("../model/generateUtil.php");
				dejarEnSession();
				?>	
                	<table>
                    	<tr>
                        	<td><img src="../images/usuarios/empleado.png"></td>
							<?php 															
								$empleado = unserialize($_SESSION['Empleado']);
							?>
                            <td>Bienvenido!! <br><?php echo $empleado->getNombre() ." ". $empleado->getApellido(); ?><br> DNI: <?php echo $empleado->getDni(); ?><br> <a href="index.php?LogOut=<?php echo $_SESSION['LogOut']; ?>">Salir</a></td>
                            
                    	</tr> 				
                	</table> 
        	</div>
			<?php } ?>	