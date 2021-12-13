<?php
  session_start();
  include_once('usuarios.php');
  
  if (isset($_POST["username"]) && isset($_POST["password"])){
  
  $objEstudiante = new Usuarios();
  
  $estudiante = $_POST["username"];
  $contrasena = $_POST["password"];
  
  $datos = $objEstudiante->login($estudiante, $contrasena);
  $arreglo = mysqli_fetch_array($datos);
  
    if (mysqli_num_rows($datos) > 0) {
        $_SESSION['usuario'] =  $arreglo;
        echo $arreglo[6];
    } else {
      echo 2;  
    }
  
  }
?>
