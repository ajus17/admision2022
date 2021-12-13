<?php

   header('Content-type: application/json');
   include_once('questionrand.php');
   include_once('dataIntent.php');
   
   $test['status']='error';

   $banco=new Banco();
   $intent=new Data();
   
   $datosIntento = mysqli_fetch_array($banco->testStatus($intent->getIntento()));

   if ($datosIntento[0] != 0){

    if($questions = $banco->loadQuestion($intent->getIntento()))
    {
       $test['status']='success';
       $test['pregunta2']= $questions[0]['codPregunta'];
       $test['p1']= $questions[0]['pregunta'];
       $test['pregunta1']= $questions[1]['codPregunta'];
       $test['p2']=$questions[1]['pregunta'];
       $test['progress']="width: ". $intent->getProgreso() ."%; ";
       $test['reamming']=$intent->getReamming() ;
    }
    else
    {
        $banco->testStatusUpdate($intent->getIntento());
        $test['status']='completo';
    }

}else {
    $test['status']='completo';
}


    echo json_encode($test);
?>
