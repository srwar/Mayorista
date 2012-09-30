<?php
  /*if(!empty($estaIngresando)){
    header("location: error.php");
    exit();
  }*/
  if(!empty($_POST['txtContra'])){
     $_SESSION['txtContra'] = $_POST['txtContra'];
  }
  if(!empty($_POST['txtUsuario'])){
       $_SESSION['txtUsuario'] = $_POST['txtUsuario'];
  }
  if(!empty($_SESSION['txtContra']) && !empty($_SESSION['txtUsuario'])){
    echo "adentro!".$_SESSION['txtUsuario'];
  }else{
    header("location: error.php");
    exit();
  }
?>
