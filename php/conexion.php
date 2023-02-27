<?php
class Conectar {
    private $host, $user, $pass, $database;
    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = ""; 
        $this->database = "prensa_db";
    }
    public function conectar() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $conexion = new mysqli($this->host,$this->user,$this->pass,$this->database);
        $conexion->set_charset("utf8");
        return $conexion;  
    }

    public function agregar($tabla, $columnas, $datos){
        $sql ="INSERT INTO $tabla $columnas VALUES $datos";
        //echo $sql;
        $this->conectar()->query($sql);
    }
    public function editar($tabla,$datos,$condicion){
        $sql = "UPDATE $tabla SET $datos WHERE $condicion";
        //echo $sql;
        $this->conectar()->query($sql);
    }
    public function eliminar($tabla,$condicion){

        $sql = "DELETE FROM $tabla WHERE $condicion";
        //echo $sql;
        $this->conectar()->query($sql);
    }
    public function mostrarCondicion($columnas,$tabla, $condicion){
        $sql = "SELECT $columnas FROM $tabla WHERE $condicion";
        //echo $sql;
        $resultado = $this->conectar()->query($sql);
        return $resultado;
    }
    public function mostrar($columnas,$tabla){
        $sql ="SELECT $columnas FROM $tabla";
        $resultado = $this->conectar()->query($sql);
        return $resultado; 
    }
    public function copiar($tabla,$columnas,$datos){
         $sql ="INSERT INTO $tabla $columnas $datos";
        //echo $sql;
        $this->conectar()->query($sql);
    }
}
$connect = new Conectar();
?>
