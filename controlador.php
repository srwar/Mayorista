<?php
  /*if(!empty($estaIngresando)){
    header("location: error.php");
    exit();
  }*/
  
  ini_set("display_errors","on");
  error_reporting(E_ALL);
  
  session_name("usuarioMayorista");
  session_start();
  
  $errors = ' ';
  
  if(!empty($_POST['txtContra'])){
    $_SESSION['txtContra'] = $_POST['txtContra'];
  }else{
    $errors = 'Debe ingresar contrasenia';
  }
  
    if(!empty($_POST['txtUsuario'])){
    $_SESSION['txtUsuario'] = $_POST['txtUsuario'];
  }else{
    $errors = $errors.' Debe ingresar su nombre de usuario';
  }
  
  
  if(!empty($_SESSION['txtContra']) && !empty($_SESSION['txtUsuario'])){
    echo "adentro!".$_SESSION['txtUsuario'];
  }else{
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
  }
?>
