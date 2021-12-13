<?php
   header('Content-type: application/json');
   include_once('resultados.php');

   $resultados['status']='error';
   if(isset($_REQUEST['codIntento']))
    {
        $intento=$_REQUEST['codIntento'];
        $objResultado = new resultados();
        $bulk=$objResultado->getRes($intento);

        while($resultado=$bulk->fetch_assoc())
        {
            $codEstudiante=$resultado['codEstudiante'];
            $key=$resultado['ciencia'];
            $resultados["$key"]=$resultado['result'];
            $resultados['intento']=$resultado['result'];
            $resultados['estudiante']=$resultado['nombres']." ".$resultado['apellidos'];
        }
        $resultCarr=$objResultado->getResEst($codEstudiante);
        $i=1;
        while($resultadoCarrera=$resultCarr->fetch_assoc())
        {
        
            $resultados['o'.$i]=$resultadoCarrera['nombreCarrera'].": ".round($resultadoCarrera['total'], 2);
            $i++;
        }


        $resultados['status']='success';
    }


    echo json_encode($resultados);
?>
