<?php
	function graficarTabla($resultado) {
		echo "<table id='myTable' class='tablesorter'>";
		echo "<thead> 
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio</th>
				</tr>
			</thead>
			<tbody>";
		while ($array = mysql_fetch_array($resultado)) {
			echo "<tr>
					<td>". $array['codigo'] ."</td>
					<td>". $array['nombre'] ."</td>
					<td>". $array['p_cantidad'] ." x ". $array['p_tamanio'] ." ". $array['p_unidad_medida'] ."</td>
					<td>". $array['precio'] ."</td>
				</tr>";					
		}
		echo "</tbody></table>";		
	}
?>