<?php if(!isset($MOSTRAR)) { header("Location: principal.php"); exit(); } ?>
                    <form name="buscarPersonal" id="buscarPersonal" onKeyUp="validarBusquedaPersonal(this)">
                    <fieldset>
                    <legend>BUSCAR</legend>				
                            <label>Legajo</label><input id="buscarlegajo" name="buscarlegajo" type="text" size=5> <br>
                            <label>Fecha</label><input  id="buscarfecha" name="buscarfecha" type="text" size=10 maxlength="10" onFocus="intoDatePicker(this)"> <br>
                            <label>Nombre</label><input id="buscarnombre" name="buscarnombre" type="text" size=30> <br>
                            <label>Empleado</label>
                                <select id="buscarcargo" name="buscarcargo">
                                	<option value="0">	-	</option>
                                    <option value="1" selected="selected">Vendedor</option>
                                    <option value="2">Deposito</option>
                                    <option value="3">Compras</option>                            
                                 </select>
                            <input type="submit" value="Buscar"  id="boton">
                    </fieldset>
                    </form>	
                    <form>
                	<fieldset>
                    <legend>PERSONAL</legend>
                	<table align="center" class="tabla">
                      	<thead>
			    			<th> Nro Legajo </th>
                            <th> Nombre y Apellido </th>
                            <th> Cargo </th>
                       	    <th> Historial </th>
                        </thead>
                        
                        <tr>
                        	<td><input type="button" value="345" size=6 ></td>
                            <td><input type="button" value="ADRIAN, CASERES" size="20"></td>
                            <td><input type="button" value="Vendedor"></td>
                            <td><input type="button"  value="Ver" alt="Ver Historial"></td>
                        </tr>
                       <tr>
                        	<td><input type="button" value="345" size=6 ></td>
                            <td><input type="button" value="ADRIAN, CASERES" size="20"></td>
                            <td><input type="button" value="Vendedor"></td>
                            <td><input type="button"  value="Ver" alt="Ver Historial"></td>
                        </tr>
                        <tr>
                        	<td><input type="button" value="345" size=6 ></td>
                            <td><input type="button" value="ADRIAN, CASERES" size="20"></td>
                            <td><input type="button" value="Vendedor"></td>
                            <td><input type="button"  value="Ver" alt="Ver Historial"></td>
                        </tr>
                        <tr>
                        	<td><input type="button" value="345" size=6 ></td>
                            <td><input type="button" value="ADRIAN, CASERES" size="20"></td>
                            <td><input type="button" value="Vendedor"></td>
                            <td><input type="button"  value="Ver" alt="Ver Historial"></td>
                        </tr>
                    </table> 
                    </fieldset>        
                    </form> 
                	<fieldset>
                    <legend>HISTORIAL</legend>
                	<table align="center" class="tabla">
                      	<thead>
                        	<th> Fecha </th>
                            <th> Hora Entrada </th>
                            <th> Hora Salida </th>
                            <th> Total Hs </th>
                        </thead>
                        <tr>
                        	<td> <input type="button" value="12/05/2012"> </td>
                            <td> <input type="button" value="8:00"> </td>
                            <td> <input type="button" value="12:00"> </td>
                            <td> <input type="button" value="4"> </td>
                        </tr>
						<tr>
                        	<td> <input type="button" value="12/05/2012"> </td>
                            <td> <input type="button" value="8:00"> </td>
                            <td> <input type="button" value="12:00"> </td>
                            <td> <input type="button" value="4"> </td>
                        </tr>
                        <tr>
                        	<td> <input type="button" value="12/05/2012"> </td>
                            <td> <input type="button" value="8:00"> </td>
                            <td> <input type="button" value="12:00"> </td>
                            <td> <input type="button" value="4"> </td>
                        </tr>                       
                    </table> 
                    </fieldset>
		    <br>