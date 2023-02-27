<?php
//include_once("db_connect.php");
include_once '../Php/conexion.php';
class tablaEditar extends Conectar{
    public function obtenerId($columna,$tabla,$condicion){
        $sql = "SELECT $columna FROM $tabla WHERE $condicion";
        $response = $this->conectar()->query($sql);
        return $response->fetch_array(MYSQLI_BOTH);
    }
    public function editarTablaD(){
        $input = filter_input_array(INPUT_POST);
        if ($input['action'] == 'edit') {  
            $emitido = $input['emitido'];
            $formato = $input['formato'];
            $contenido = $input['contenido'];
            $bloque = $input['bloque'];
            $descripcion = $input['descripcion'];
            $duracion = $input['duracion'];
            //echo $formato;
            $nombre = $input['presentador'];
            $registro = $this->obtenerId("`IdPresentador`","`presentador`","`NombrePresentador` = '$nombre'");
            $idPresentador= $registro['IdPresentador'];
            $idCiudad = $input['ciudad'];
            //$registro = $this->obtenerId("`idCiudad`","`ciudad`","`nomCiudad` = '$nombre'");
            //$idCiudad = $registro['idCiudad'];
            $nombre = $input['periodista'];
            $registro = $this->obtenerId("`IdPeriodista`","`periodista`","`NombrePeriodista` = '$nombre'");
            $idPeriodista = $registro['IdPeriodista'];
            //echo "$idPeriodista jola";
            $nombre = $input['editor'];
            $registro = $this->obtenerId("`IdEditor`","`editor`","`NombreEditor` ='$nombre' ");
            $idEditor = $registro['IdEditor'];
       //   echo "ho $idPresentador $idCiudad $idPeriodista $idEditor";
            $id = $input['id'];
            //echo "olh $id";
            $sql_query = "UPDATE periodismo SET IdPresentador='$idPresentador',Descripcion='$descripcion' ,Emitido='$emitido', idFormato='$formato', idCiudad='$idCiudad', IdPeriodista='$idPeriodista', IdEditor='$idEditor', idContenido = '$contenido', idBloque = '$bloque', Duracion = '$duracion' WHERE Id='$id'";
            $this->conectar()->query($sql_query);
        }
        echo json_encode($input);
    }  
    public function consulta($update_field,$id){
        if($update_field && $id) {
            $sql_query = "UPDATE periodismo SET $update_field WHERE Id='" . $id . "'"; 
            $resul =$this->conectar()->query($sql_query);
            if(empty($resul)){
                echo 'Ocurrio un error';
            }
        }
    }
}
$con =new tablaEditar();
$con->editarTablaD();
?>