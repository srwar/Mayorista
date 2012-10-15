<?php
	function graficarTabla($cabeceras, $resultado) {
		
		echo "<table id='myTable' class='tablesorter'>";
		echo "<thead> 
				<tr>";
				foreach($cabeceras as $name)
					echo "<th>$name</th>";					
		echo "	</tr>
			</thead>
			<tbody>";
		while ($array = $resultado->fetch_assoc()) {
			echo "<tr>";
				foreach($array as $name)
					echo "<td>$name</td>";						
			echo "</tr>";					
		}
		echo "</tbody></table>";		
	}
?>