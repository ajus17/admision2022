<?php

include_once('connection.php');

class Data{  
    
    private $obj;
    private $codEstudiante;
    private $numintento;
    private $progress;
    private $reamming;

    function __construct(){
        $this->obj = new conexion();
        if (isset( $_SESSION['estudiante'])){
          $this->codEstudiante = $_SESSION['estudiante'][0];   
        }
        
    }

    function getEstudiante(){
        return $this->codEstudiante;
    }

    function getIntento(){
        $query = "select * from intento where estudiante = $this->codEstudiante";
        $datosIntento = $this->obj->consultar($query);
        $arreglo = mysqli_fetch_array($datosIntento);
        $this->numintento = $arreglo['codIntento'];
        return $this->numintento;
    }

    function getProgreso(){
        $query2 = "select count(codTest) FROM test where numIntento = ".$this->getIntento();
        $datos= $this->obj->consultar($query2);      
        $this->progress=mysqli_fetch_array($datos);
        return $this->progress[0]/2;
    }

    function getReamming(){
        $query3 = "SELECT  CONCAT(DATE_FORMAT(fecha, '%m/%d/%Y'),' ',finIntento)  FROM intento WHERE codIntento = ".$this->getIntento();
        $datos= $this->obj->consultar($query3);      
        $this->reamming=mysqli_fetch_array($datos);
        return $this->reamming[0];
    }
    
}
?>
