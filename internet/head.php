<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
			<div id="logo"> 
            	<a href="index.php"><img src="../images/Logo.png" alt="Logo Mayorista"></a>
			</div>            
       		<div class="usuario">					
            	<form title="Ingresar" action="../ctr/form.php" method="POST">
                	<label>Usuario:</label><input type="text" value="" name="usuario"><br/>
                    <label>Clave: </label><input type="password" value="" name="contrasena"><br>
                    <input class="btn" type="submit" value="Ingresar" id="boton">
                </form> 			
        	</div>
			