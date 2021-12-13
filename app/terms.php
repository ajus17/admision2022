<?php
include_once('connection.php');
include_once('dataIntent.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$objIntent = new Data();
$objConsulta = new conexion();

    $terminos = $_POST['terms'];
    $estudiante = $objIntent->getEstudiante();

    $consulta = "call addInteto($estudiante)";

    if ($objConsulta->consultar($consulta)){
        echo "<script>window.location='../testing.php'</script>";
    }
    


?>
