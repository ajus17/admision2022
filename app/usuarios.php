<?php
    include_once('connection.php');

    class Usuarios{
        
        function __construct(){
            //vacio
        }

        public function login($usuario, $contrasena){
            $objConexion = new conexion();
            $objConexion->conectar();
            $consulta = "SELECT * FROM allusers WHERE nombreUsuario ='$usuario' AND contrasena = '$contrasena';";
            $resultado = $objConexion->consultar($consulta);
            return $resultado;
        }

        public function blockUser($codEstudiante){
            $objConexion = new conexion();
            $consulta = "UPDATE estudiante SET estadoEstudiante = '2' WHERE codEstudiante = '$codEstudiante';";
            return $objConexion->consultar($consulta);
        }
        
    }
/*
    $obj = new Usuarios();
    $datos = mysqli_fetch_array($obj->login("12025740", "080692"));
    print_r($datos);
    */

?>
