<?php
	session_name("Mayorista");
	session_start();
	$MOSTRAR = false;
        
        include ("ABMCliente.class.php");		
        $error = array();                               
		
        if(count($_POST) > 0 && isset($_POST['aceptar'])) {
                                                                
			//echo var_dump($_POST) ."<br>";
            $Cliente = new ABMCliente($_POST['txtCuit'], $_POST['txtNombre'], $_POST['txtApellido'], $_POST['txtSexo'], $_POST['txtTelefono'], $_POST['txtDireccion'], $_POST['txtLocalidad']);
            //echo var_dump($Cliente);                        
			if(!preg_match("/[0-9]+/",$Cliente->getCuit())) {
                $error[] = "Ingrese un numero de CUIT";
            }
            if(!preg_match("/[A-z]+/",$Cliente->getNombre()))
                $error[] = "Ingrese nombre";
            if(!preg_match("/[A-z]+/",$Cliente->getApellido()))
                $error[] = "Ingrese apellido";			
            if($Cliente->getSexo() != "M" && $Cliente->getSexo() != "F")
                $error[] = "Ingrese sexo";
            if(!preg_match("/[0-9]+/",$Cliente->getTelefono()))
                $error[] = "Ingrese un numero de telefono";
            if(!preg_match("/[A-Za-z]+/",$Cliente->getDireccion()))
                $error[] = "Ingrese direccion";
            if(!preg_match("/[A-Za-z]+/",$Cliente->getLocalidad()))
                $error[] = "Ingrese una localidad";
            
            $_SESSION['ABMCliente'] = serialize($Cliente);

            if(count($error) != 0) {
                require 'ABMClienteForm.php';
            } else {
                header("Location: altaExitosa.php");
                exit();
            }   

        } else {
            require 'ABMClienteForm.php';
        }                                             			                      	
?>