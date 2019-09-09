<?php 
class clsConexion{
    private $conexion;

    public function abrir_conexion(){
        if (!isset($this->conexion)){
            include_once("dbconfig.php");
            // Se crea la conexion
            $this->conexion = mysqli_connect( DB_SERVER,DB_USER,DB_PASS) or die ("No se ha podido conectar al SERVIDOR de Base de datos");

            // Se establece el conjunto de caracteres predeterminado del cliente
            mysqli_query($this->conexion,"SET NAMES 'utf8'");

            // Selección del a base de datos a utilizar
            $db = mysqli_select_db($this->conexion, DB_NAME) or die ( "No se ha podido conectar a la BASE DE DATOS" );
        }
    }

    public function cerrar_conexion(){
        if(isset($this->conexion)){
            $this->conexion=null;
        }
    }

    public function obtener_conexion(){
        return $this->conexion;
    }
}
?>