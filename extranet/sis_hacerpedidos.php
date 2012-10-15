				
				<div id="sis-pedidosextranet">
    
                	<form name="generarCompras">
                    <fieldset>
                    <legend>GENERAR COMPRAS</legend>
                	<table align="center" class="tabla" id="tablon">
                      	<thead>
                        	<th>Codigo</th>
                            <th>Producto</th>                           
                       		<th>Proveedor</th>
                        </thead>
                        
                        <tr id="Producto1">
                        	<td><input type="button" value="AAF456" size=10></td>
                            <td><input type="button" value="YE.RBA MATE EL INDIO" size=20></td>
                            <td><input type="button" value="Agregar" onClick="agregarProducto(document.getElementById('Producto1'))"></td>
                        </tr>                      
                        <tr id="Producto2">
                        	<td><input type="button" value="AAF456" size=10></td>
                            <td><input type="button" value="YE.RBA MATE EL INDIO" size=20></td>
                            <td><input type="button" value="Agregar" onClick="agregarProducto(document.getElementById('Producto2'))"></td>
                        </tr>
                        <tr id="Producto3">
                        	<td><input type="button" value="AAF456" size=10></td>
                            <td><input type="button" value="YE.RBA MATE EL INDIO" size=20></td>
                            <td><input type="button" value="Agregar" onClick="agregarProducto(document.getElementById('Producto3'))"></td>
                        </tr>                   
                    </table> 
                    </fieldset>  
                    </form>
                    
                	<form name="canastaDePedidos" >
                    <fieldset>
                    <legend>CANASTA DE PEDIDOS</legend>
                    <table align="center" class="tabla">
                		<thead>
                        	<th>Codigo</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                        </thead>
                        <tr id="Producto1-1">
                        	<td><input type="button" value="AAF765" size=10></td>
                            <td><input type="button" value="YERBA MATE EL DORADO" size=20></td>
                            <td><input type="text" id="cantidad" value="" size=5 onKeyUp="cantidadPedido(this)"></td> 
                            <td><input type="button" value="Quitar" onClick="quitarProducto(document.getElementById('Producto1-1'))"></td>
                        </tr>
                        <tr id="Producto2-2">
                        	<td><input type="button" value="AAF765" size=10></td>
                            <td><input type="button" value="YERBA MATE EL DORADO" size=20></td>
                            <td><input type="text" id="cantidad" value="" size=5 onKeyUp="cantidadPedido(this)"></td>                            
                            <td><input type="button" value="Quitar" onClick="quitarProducto(document.getElementById('Producto2-2'))"></td>
                        </tr>
                        <tr id="Producto3-3">
                        	<td><input type="button" value="AAF765" size=10></td>
                            <td><input type="button" value="YERBA MATE EL DORADO" size=20></td>
                            <td><input type="text" id="cantidad" value="" size=5 onKeyUp="cantidadPedido(this)"></td>
                            <td><input type="button" value="Quitar"  onClick="quitarProducto(document.getElementById('Producto3-3'))"></td>
                        </tr>                     
                    </table> 
                    </fieldset>
  					<div align="center"> <input type="reset" value="Limpiar">
                    	 <input type="button" value="Pedir" onClick="verificarPedido(document.canastaDePedidos)" > 
                    </div>     
                    </form>                     
                
                </div>