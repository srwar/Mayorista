<?php
  /*if(!empty($estaIngresando)){
    header("location: error.php");
    exit();
  }*/
  
  ini_set("display_errors","on");
  error_reporting(E_ALL);
  
  session_name("usuarioMayorista");
  session_start();
  
  //$errors = '';
  //$_SESSION['txtUsuario'] = '';
  //$_SESSION['txtContra'] = '';
  
  //control para salir de la session
  if(isset($_GET["salir"]) && $_GET["salir"] == "salir123"){
    session_unset();
    session_destroy();
    header("location: login.php");
  }
  
  if(count($_POST)){
    
  }
  if(!empty($_POST['txtContra'])){
    $_SESSION['txtContra'] = $_POST['txtContra'];
  }else{
    $errors = "Debe ingresar contrasenia";
  }
  
  if(!empty($_POST['txtUsuario'])){
    $_SESSION['txtUsuario'] = $_POST['txtUsuario'];
  }else if(empty($errors)){
    $errors = "Debe ingresar su nombre de usuario";
  }else{
    $errors = $errors." Debe ingresar su nombre de usuario";
  }
  
  if(isset($errors)){
    require'login.php';
  }else{
    echo "adentro".$_SESSION['txtUsuario'];
  }
  
  if(!empty($_SESSION['txtContra']) && !empty($_SESSION['txtUsuario'])){
    header("location: insession.php");
    exit();
  }
  
?>
