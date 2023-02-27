+-<?php
include_once 'conexion.php';
class ActualizarHora extends Conectar{
    function actualizarHora($realizada_en,$edicion,$fecha){
        global $resulhora;
        $this->consultaObtenerHora(1,$realizada_en,$edicion,$fecha);
        $obtener = $resulhora->fetch_array(MYSQLI_BOTH);
        if(!empty($obtener['Duracion']) and !empty($obtener['Hora_Prog'])){
            $aux = $this->sumar($obtener['Duracion'], $obtener['Hora_Prog']);       
            while($obtener = $resulhora->fetch_array(MYSQLI_BOTH)){
                $mm_ss =$this->sumar($obtener['Duracion'], $aux);
                $aux=$mm_ss;
                $update_field= "Hora_Prog='".$aux."'";
                $this->consulta($update_field,$obtener['Id'],$realizada_en,$edicion,$fecha);       
            }
        }
        
    }
    function sumar($hora1, $hora2)
    {
        list($h, $m, $s) = explode(':', $hora2); //Separo los elementos de la segunda hora
        $a = new DateTime($hora1); //Creo un DateTime
        $b = new DateInterval(sprintf('PT%sH%sM%sS', $h, $m, $s)); //Creo un DateInterval
        $a->add($b); //SUMO las horas
        return $a->format('H:i:s'); //Retorno la Suma
    }    
    public function consultaObtenerHora($id,$realizada_en , $edicion,$fecha){
            global $resulhora;
            if(empty($edicion)){
                $EdicionAux  = 'Al Dia Bolivision';
            }
            else{
                $EdicionAux=$edicion;
            }
            if(empty($realizada_en)){
                $Realizada_aux = 'La Paz';
                
            }
            else{
                $Realizada_aux=$realizada_en;
            }
            $fecha = $fecha;
            $sql_query = "SELECT *FROM periodismo  WHERE ordenPosicion>='" . $id . "'AND Fecha = '$fecha' AND idEdicion='$EdicionAux' AND idRealiza_en='$Realizada_aux' and `activo` = '1' ORDER BY ordenPosicion ASC"; 
            $resulhora =$this->conectar()->query($sql_query);

            //echo $sql_query;      
            if(empty($resulhora)){
                echo 'Ocurrio un error';
            }
    }
    public function consulta($update_field,$id,$realizada_en,$edicion,$fecha){
        $EdicionAux=$edicion;
        $Realizada_aux=$realizada_en;
        $fecha = $fecha;
          
        if($update_field && $id) {

            $sql_query = "UPDATE periodismo SET $update_field WHERE Id='" . $id . "'AND Fecha = '$fecha' AND idEdicion='$EdicionAux' AND idRealiza_en='$Realizada_aux' AND activo='1'"; 
            //echo $sql_query."\n";
            $resul =$this->conectar()->query($sql_query);
            if(empty($resul)){
                echo 'Ocurrio un error';
            }
        }
    }

}

if(!empty($_POST['sw'])){
    $con1 = new ActualizarHora();
    $sw = $_POST['sw'];
    if($sw==1){
        $realizada_en = $_POST['realizada_en'];
        $edicion = $_POST['edicion'];
        $fecha  = $_POST['fecha'];
        $con1->actualizarHora($realizada_en,$edicion,$fecha);
    }   
}
?>