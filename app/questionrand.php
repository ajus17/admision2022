<?php
include_once('connection.php');
 class Ciencia
{
    private $codCiencia;
    private $nombre;

    function __construct()
    {
        $this->codCiencia="";
        $this->nombre="";
    }

    public function getCodCiencia()
    {
        return $this->codCiencia;
    }

    public function setCodCiencia($codCiencia)
    {
        $this->codCiencia = $codCiencia;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}

class Banco
{
    private $codPregunta;
    private $pregunta;
    private $orden;
    private $ciencia;
    private $con;

    function __construct()
    {
        $this->codPregunta="";
        $this->pregunta="";
        $this->orden="";
        $this->ciencia= new Ciencia();
    }
    public function getPregunta()
    {
        return $this->pregunta;
    }

    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function getOrden()
    {
        return $this->orden;
    }

    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    public function getCiencia()
    {
        return $this->ciencia;
    }

    public function setCiencia($ciencia)
    {
        $this->ciencia = $ciencia;

        return $this;
    }
    public function getCodPregunta()
    {
        return $this->codPregunta;
    }

    public function setCodPregunta($codPregunta)
    {
        $this->codPregunta = $codPregunta;
         return $this;
    }

    public function loadQuestion($intento)
    {
        $this->con=new conexion();
        $preguntas=$this->con->consultar("call loadQuestions($intento);");
        return $preguntas->fetch_all(MYSQLI_ASSOC);

    }
    public function loadBanco($filtro,$operacion)
    {
        $this->con=new conexion();
        $bancoCC=$this->con->consultar("call filtraTest('$filtro',$operacion);");
        return $bancoCC;

    }

    public function testStatusUpdate($intento){
        $this->con = new conexion();
        return $this->con->consultar("UPDATE intento SET idEstadoIntento = '6' WHERE codIntento = $intento;");
    }

    public function testStatus($intento){
        $this->con = new conexion();
        return $this->con->consultar("SELECT COUNT(codIntento) FROM intento WHERE codIntento = $intento AND idEstadoIntento = 5;");
    }
}

/*$banco=new Banco;

var_dump($banco->loadBanco("sangre",1));
*/

?>