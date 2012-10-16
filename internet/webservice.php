<?php
	header('Content-Type: text/html; charset=UTF-8');
	include("../model/DBMysql.php");	
	$query = "SELECT codigo, nombre, p_cantidad, p_tamanio, p_unidad_medida, precio FROM producto WHERE oferta = 1";
	$resultado = DBMysql::consulta($query);
		
	while($row = $resultado->fetch_assoc()) {
		$data['producto'][] = $row;
	} 
	header("Content-type: application/json");
	//header("Content-Disposition: attachment; filename=Oferta.json");
	echo json_encode($data, true);

?>