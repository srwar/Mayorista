<?php
	$empleado->puedoEstarAqui(1);
	$MOSTRAR = false;
	$unidadesDeMedida = array("Kg" => "Kilogramos", "Grs" => "Gramos", "Lts" => "Litros", "CC" => "CM3"	);
	$categoria = array("1" => "BEBIDAS", "2" => "COMIDA", "3" => "GOLOSINAS", "4" => "CEREALES Y LEGUMBRES");
	include ("ABMProducto.class.php");
	include("../model/DBMysql.php");	
	include("../model/Utiles.class.php");
    $error = array();			
			if (isset($_POST) && isset($_POST['cancelar'])) {
				unset($_SESSION['ABMProducto']);
				unset($_SESSION['ABM']);
				unset($_SESSION['producto']);
				header("Location: ABMProductoV.php");
				exit();
			}
			
			if (isset($_POST) && isset($_POST['aceptar'])) {		
				$Producto = new ABMProducto($_POST['txtCodigo'], $_POST['txtStock'], $_POST['txtStockMinimo'], $_POST['txtPrecio'], $_POST['txtNombre'], $_POST['txtCantidad'], $_POST['txtTamanio'], $_POST['txtUnidadMedida'], $_POST['txtCategoria'], $_POST['txtProveedor'], @$_POST['txtOferta']);
				  
				  if(!Utiles::esCodigoValido($Producto->getCodigo())) {
					  $error[] = "Ingrese codigo de producto";
				  }
				  if(!Utiles::isEntero($Producto->getStock())) {
					  $error[] = "Ingrese stock del nuevo producto";
				  }
				  if(!Utiles::isEntero($Producto->getStock_min())) {
					  $error[] = "Ingrese StockMin";
				  }
				  if(!preg_match("/[0-9]+.[0-9]/",$Producto->getPrecio())) {
					  $error[] = "Ingrese precio del producto";
				  }
				  if(!Utiles::nombreProductoValido($Producto->getNombre())) {
					  $error[] = "Que nombre posee el producto?";
				  }
				  //!Utiles::isEntero($Producto->getP_tamanio())
				  if(!Utiles::isEntero($Producto->getP_cantidad())) {
					  $error[] = "Cuantas unidades contiene el producto?";
				  }
				  if(!Utiles::isEntero($Producto->getP_tamanio())) {
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
				  if($Producto->getOferta() != "1" && $Producto->getOferta() != "0") {
					  $error[] = "El producto esta en oferta?";
				  }
				  $_SESSION['ABMProducto'] = serialize($Producto);
				  
				  if(count($error) > 0) {
					  require 'ABMProductoForm.php';
				  } else {
					  require "ProcesarABMProducto.php";					 
				  } 
			  } else {
				  require 'ABMProductoForm.php';
			  }
?>