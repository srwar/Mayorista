<?php
  /*if(!empty($estaIngresando)){
    header("location: error.php");
    exit();
  }*/
  
  ini_set("display_errors","on");
  error_reporting(E_ALL);
  
  session_name("usuarioMayorista");
  session_start();
  
  
  
  if(!empty($_SESSION['txtContra']) && !empty($_SESSION['txtUsuario'])){
    echo "adentro!".$_SESSION['txtUsuario'];
  }else{
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
  }
?>
