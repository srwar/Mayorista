<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
				<fieldset>
				<legend>
					ENVIANOS TUS DUDAS!!
				</legend>
				<div id="text">
							Su opini&oacute;n siempre es importante,Tu Distribuidora se preocupa por ud.
					y por eso queremos saber de ud.</br>

					Autoservicio mayorista Tu Distribuidora
					le ofrece atenci&oacute;n personalizada.</br>

					Ac&eacute;rquenos sus dudas, inquietudes o sugerencias al &aacute;rea que usted desee.</br>

					No deje de consultarnos y hacer sus pedidos!!!<br>
                    </div>
					
                    <div id="mensaje">
                    	
						<form name="enviarMensaje" id="enviarMensaje" onSubmit="validarMensaje(this)" onKeyUp="validarMensaje(document.enviarMensaje)">
                        <fieldset>	
                        <legend> MENSAJE</legend>
                        	<table width="500px">
                            	<tr>
                                	<td><label for="nombre" class="required">Nombre *</label></td>
                                   	<td><input type="text" name="nombre" id="nombre" class="required"/></td>
								</tr>
                                <tr>
                                	<td><label>Direcci&oacute;n de E-mail *</label></td>
                                   	<td><input class="requiered" name="email" id="email" type="text" /></td>
								</tr>
                                <tr>
                                	<td><label>Documento Tipo *</label></td>
                                   	<td><select name="tipoDocumento">
                                    <option value="0">-</option>
                                    <option value="1" selected="selected">DNI</option>
									<option value="2">LC</option>
									<option value="3">DU</option>
									<option value="4">Pasaporte</option>
                                    </select> </td>                                    
								</tr>
                                <tr>
                                	<td><label>Documento Numero *</label> </td>
                                    <td><input class="required" name="dni" id="dni" type="text" /></td>
                                </tr>
                                <tr>
                                	<td><label>Cuit *</label></td>
                                   	<td><input class="required" name="cuit" id="cuit" type="text" /></td>
								</tr>
                                <tr>
                                	<td colspan="2"><label>Mensajes *</label><br>
                                    <textarea class="required" id="campotexto" name="campotexto" cols="40" rows="5" ></textarea><br>
					 				<input type="reset" value="Limpiar">
									<input type="submit" value="Enviar" >
                                 </td>
                                 </tr> 
					 		</table>
                            </fieldset> 
					 	</form>                      
		        	</div>
					</fieldset>