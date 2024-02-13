<?php

class Clase_Conectar{

    public $conexion;
    protected $db; 
    private $host = "localhost";
    private $usu = "root";
    private $clave = "";
    private $base = "habitaciones";

    public function ProcedimientoConectar(){

        $this->conexion =  mysqli_connect($this->host, $this->usu, $this->clave, $this->base);
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        if(!$this->conexion){
            die("Error al conectar con mysql: " . mysqli_error($this->conexion));
        }
        $this->db = mysqli_select_db($this->conexion, $this->base);
        if(!$this->db){
            die("Error al conectar con la base de datos: " . mysqli_error($this->conexion));
        }
        return $this->conexion;

    }

}

?>
