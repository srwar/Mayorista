<?php
	include("DBMysql.php");
	$query = "SELECT nombre FROM categoria;";
        /*
	$resultado = @DBMysql::consulta("charlsn", "chalsn", $query);
	if($resultado == null) {
		//header("Location: index.php");
		echo "No hay nada";
		exit();
	}
    else {
		$resultado->fetch_assoc();
		
        foreach($resultado as $row)
            echo "<h1>". $row['nombre'] ."</h1>";
	}		*/
	
	DBMysql::login("charlsn", "charlsn");
	if(DBMysql::isLogger()) {
			echo "Sip!!";
			$c = unserialize($_SESSION['connection']);
			echo var_dump($c);
			$query = "Select nombre from categoria;";
			$resultado = $c->query($query);
			while($row = $resultado->fetch_assoc())			
				echo $row['nombre'];
	}
	
	else
		echo "Nop!!";

?>