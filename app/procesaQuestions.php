<?php 
    header('Content-type: application/json');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once('dataIntent.php');
    include_once('connection.php');

    $objetoconexion = new conexion();
    $obj = new Data();
    $resultados['status']='error';



    $estudiante = $obj->getEstudiante();
    $intento = $obj->getIntento();
    
    $question1 = $_REQUEST['pregunta1'];
    $answer1 =$_REQUEST['answer-item1'];
    $question2 = $_REQUEST['pregunta2'];
    $answer2 =$_REQUEST['answer-item2'];
    

    $consultainsert1 = "insert into test (pregunta, numIntento, respuesta) values ($question1, $intento, $answer1)";
    $consultainsert2 = "insert into test (pregunta, numIntento, respuesta) values ($question2, $intento, $answer2)";
    
    if ($objetoconexion->consultar($consultainsert1) && $objetoconexion->consultar($consultainsert2)){
      $resultados['status']='success';
    }else {
      $resultados['status']='algo falló';
    }

    echo json_encode($resultados);                    
?>
