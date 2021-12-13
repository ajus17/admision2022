<?php

    include_once('connection.php');

    class Resultados{
        private $objresultado;
        private $allStudents;
        private $allIntentos;
        private $opcion1;
        private $opcion2;

        function __construct(){ 
            $this->objresultado = new conexion();
        }

        function getIntentos ($estudiante){
            $this->objresultado->consultar("Select * from Intento Intento.estudiante = $estudiante;");
            return $this->allStudents;
        }
        function getAllIntentos (){
            $this->allIntentos = $this->objresultado->consultar("select * from bulkIntentos");
            return $this->allIntentos;
        }

        function getRes($intentoTest){
            $resultados = $this->objresultado->consultar("select * from bulkResultados where codIntento=$intentoTest");
            return $resultados;
        }
        function getResEst($codEstudiante){
            $resultados = $this->objresultado->consultar("CALL resulEstudiante($codEstudiante);");
            return $resultados;
        }

        function getOpciones($estudiante){

           $datos1 = $this->objresultado->consultar("select codCarrera from Opciones Where codEstudiante = $estudiante and opcion = 1"); 
           $info1 = mysqli_fetch_array($datos1);
           $this->opcion1 = $info1[0];

           $datos2 = $this->objresultado->consultar("select codCarrera from Opciones Where codEstudiante = $estudiante and opcion = 2"); 
           $info2 = mysqli_fetch_array($datos2);
           $this->opcion2 = $info2[0];
        }

    }
?>