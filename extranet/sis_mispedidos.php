				
				<div id="sis-miscomprasextranet">             
                	<fieldset>
                    <legend>MIS COMPRAS</legend>
					<table align="center" class="tabla">
                      	<thead>
                        	<th>N| Pedido</th>
                            <th>Fecha</th>
                            <th>Productos</th>
                        </thead>
                        
                        <tr>
                        	<td><input type="text" value="3422" size=10></td>
                            <td><input type="text" value="12/03/2012" size=10></td>
                            <td><input type="submit" id="MisProdutos" value="Ver"></td>
                        </tr>
                        <tr>
                        	<td><input type="text" value="3422" size=10></td>
                            <td><input type="text" value="12/03/2012" size=10></td>
                            <td><input type="submit" id="MisProdutos" value="Ver"></td>
                        </tr>
                        <tr>
                        	<td><input type="text" value="3422" size=10></td>
                            <td><input type="text" value="12/03/2012" size=10></td>
                            <td><input type="submit" id="MisProdutos" value="Ver"></td>
                        </tr>
                        <tr>
                        	<td><input type="text" value="3422" size=10></td>
                            <td><input type="text" value="12/03/2012" size=10></td>
                            <td><input type="submit" id="MisProdutos" value="Ver"></td>
                        </tr>
                        <tr>
                        	<td><input type="text" value="3422" size=10></td>
                            <td><input type="text" value="12/03/2012" size=10></td>
                            <td><input type="submit" id="MisProdutos" value="Ver"></td>
                        </tr>
                     </table>
                	</fieldset>
                	
                	<div id="mostrarmisproductos">
                	<fieldset>
                    <legend>PRODUCTOS</legend>
                    <table align="center" class="tabla">
                		<thead>
                        	<th>Codigo</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                        </thead>
                        <tr>
                        	<td><input type="text" value="AAF765" size=10></td>
                            <td><input type="text" value="YERBA MATE EL DORADO" size=20></td>
                            <td><input type="text" value=45 size=6></td>
                            
                        </tr>
                        <tr>
                        	<td><input type="text" value="AAF124" size=10></td>
                            <td><input type="text" value="TE TARAGUI" size=20></td>
                            <td><input type="text" value=12 size=6></td>
                            
                        </tr>
                        <tr>
                        	<td><input type="text" value="AAF560" size=10></td>
                            <td><input type="text" value="LECHE SANCOR" size=20></td>
                            <td><input type="text" value=5 size=6></td>
                            
                        </tr>                     
                    </table> 
                    </fieldset></div>
                   	
                    <fieldset>
                    <legend>Buscar</legend>
                    <form name="buscarCompras" id="buscarCompras">
                    <label>Por fecha </label> <br>
                    <label> Desde </label><input type="text" id="fechadesde" name="fechadesde" value="Desde" size="10" maxlength="10" onKeyup="validarFecha(this)" onFocus="intoDatePicker(this)"><br>
                    <label> Hasta  </label><input type="text" id="fechahasta" name="fechahasta" value="Hasta" size="10" maxlength="10" onKeyup="validarFecha(this)" onFocus="intoDatePicker(this)">   
                    <input type="button" value="Buscar" onClick="validarBuscarCompras(document.buscarCompras)">               
                    </form>
                    </fieldset>
                                                  
                </div>