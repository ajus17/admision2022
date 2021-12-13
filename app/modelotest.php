<?php

include('connection.php');

class test{

    private $objetoConexion;
    public $preguntasOrden1;
    public $preguntasOrden2;
    private $test;
    private $datos1 = array();
    private $datos2 = array();
   
    function __construct(){
        $this->objetoConexion = new conexion();  
    }

    function orden1(){
        $consulta1 = "SELECT * FROM Banco LEFT JOIN Test 
        ON Test.pregunta=Banco.codPregunta WHERE Test.pregunta IS NULL and Banco.orden=1 order by rand()";
        $this->datos1 = $this->objetoConexion->consultar($consulta1);
        //cont=0;
        /*while ($row1 = mysqli_fetch_array($this->datos1)){
            $this->preguntasOrden1[$cont++] = $row1;
        }*/

        return $this->datos1;
    }

    function orden2(){
        $consulta2 = "SELECT * FROM Banco LEFT JOIN Test 
        ON Test.pregunta=Banco.codPregunta WHERE Test.pregunta IS NULL and Banco.orden=2 order by rand()";
        $this->datos2 = $this->objetoConexion->consultar($consulta2);
        //$cont = 0;
       /* while ($row2 = mysqli_fetch_array($this->datos2)){
            $this->preguntasOrden2[$cont++] = $row2;
        }*/

        return $this->datos2;
    }

    function crearTest(){
        /*$this->orden1();
        $this->orden2();
        $this->test = array_merge($this->datos1, $this->datos2);
        return $this->test;*/
    }



}

?>