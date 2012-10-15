<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
			<div id="logo"> 
            	<a href="principal.php"><img src="../images/Logo.png" alt="Logo Mayorista"></a>
            </div>
            
       		<div class="usuario">
            <?php
				include("../model/generateUtil.php");
				dejarEnSession();
			?>	
                	<table>
                    	<tr>
                        	<td><img src="../images/usuarios/cliente.png"></td>
							<?php 	
								include("../model/Cliente.class.php");								
								$cliente = unserialize($_SESSION['Cliente']);
							?>
                            <td>Bienvenido!! <br><?php echo $cliente->getNombre() ." ". $cliente->getApellido(); ?><br> CUIT: <?php echo $cliente->getCuit(); ?><br> <a href="index.php?LogOut=<?php echo $_SESSION['LogOut']; ?>">Salir</a></td>
                            
                    	</tr> 				
                	</table>    				
                
        	</div>    			