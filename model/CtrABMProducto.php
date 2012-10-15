<?php
	
	$MOSTRAR = false;
	$unidadesDeMedida = array("Kg" => "Kilogramos", "Grs" => "Gramos", "Lts" => "Litros", "CC" => "CM3"	);
	$categoria = array("1" => "BEBIDAS", "2" => "COMIDA", "3" => "GOLOSINAS", "4" => "CEREALES Y LEGUMBRES");
	include ("ABMProducto.class.php");		
  $error = array();

	  if (isset($_POST) && isset($_POST['aceptar'])) {
			//echo var_dump($_POST) ."<br>";
		  $Producto = new ABMProducto($_POST['txtCodigo'], $_POST['txtStock'], $_POST['txtStockMinimo'], $_POST['txtPrecio'], $_POST['txtNombre'], $_POST['txtCantidad'], $_POST['txtTamanio'], $_POST['txtUnidadMedida'], $_POST['txtCategoria'], $_POST['txtProveedor'], $_POST['txtOferta']);
		  
		  if(!preg_match("/[0-9]+/",$Producto->getCodigo())) {
			  $error[] = "Ingrese codigo de producto";
		  }
		  if(!preg_match("/[0-9]+/",$Producto->getStock())) {
			  $error[] = "Ingrese stock del nuevo producto";
		  }
		  if(!preg_match("/[0-9]+/",$Producto->getStock_min())) {
			  $error[] = "Ingrese StockMin";
		  }
		  if(!preg_match("/[0-9]+,[0-9]/",$Producto->getPrecio())) {
			  $error[] = "Ingrese precio del producto";
		  }
		  if(!preg_match("/[a-zA-Z]/",$Producto->getNombre())) {
			  $error[] = "Que nombre posee el producto?";
		  }
		  if(!preg_match("/[0-9]+/",$Producto->getP_cantidad())) {
			  $error[] = "Cuantas unidades contiene el producto?";
		  }
		  if(!preg_match("/[0-9]+/",$Producto->getP_tamanio())) {
			  $error[] = "Que cantidad en enteros contiene la unidad del producto?";
		  }
		  if(!array_key_exists($Producto->getP_unidad_medida(), $unidadesDeMedida)) {
			  $error[] = "Cual es la unidad de medida del producto?";
		  }
		  if(!array_key_exists($Producto->getCategoria(), $categoria)) {
			  $error[] = "Cual es la categoria del producto?";
		  }
		  if(!preg_match("/[0-9]/", $Producto->getProveedor())) {
			  $error[] = "Cual el CUIT del proveedor?";
		  }
		  if($Producto->getOferta() == "1" && $Producto->getOferta() == "0") {
			  $error[] = "El producto esta en oferta?";
		  }
		  $_SESSION['ABMProducto'] = serialize($Producto);
		  
		  if(count($error) > 0) {
			  require 'ABMProductoForm.php';
		  } else {
			  header("Location: altaExitosa.php");
			  exit();
		  } 
	  } else {
		  require 'ABMProductoForm.php';
	  }
?>