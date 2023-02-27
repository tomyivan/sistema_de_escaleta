<?php 
include_once "conexion.php";
include_once "actualizarHora.php";
class actualizar extends Conectar{
    public function obtenerId($nombreProductor){
        $response = $this->mostrarCondicion("`idProductor`","`productor`","`Nombre`='$nombreProductor'");
        $registro = $response->fetch_array(MYSQLI_BOTH);
        return $registro['idProductor'];
    }
    public function obtenerHora($EdicionAux){
        if($EdicionAux =='1'){            
            $Hora_Prog= '06:00:00';
        }else if($EdicionAux =='2'){
            $Hora_Prog= '12:25:00';
        }
        else if($EdicionAux =='3'){
            $Hora_Prog= '20:30:00';
        }
        else if($EdicionAux =='4'){
            $Hora_Prog= '23:00:00';
        }
        else if($EdicionAux =='5'){
            $Hora_Prog= '12:30:00';
        }
        else if($EdicionAux =='6'){
            $Hora_Prog= '19:00:00';
        }
        else if($EdicionAux =='7'){
            $Hora_Prog= '12:30:00';
        }
        else if($EdicionAux =='8'){
            $Hora_Prog= '18:30:00';
        }
        return $Hora_Prog;
         
        }  
    public function actualizar($idRealiza_en,$edicion,$fecha,$idProductor,$idRealiza_enAux,$edicionAux,$fechaAux,$hora_prog,$name){
        $tabla = "`periodismo`";
        $datos = "`idEdicion` = '$edicion', `fecha` = '$fecha', `idProductor`='$idProductor',`idRealiza_en`='$idRealiza_en', `Hora_Prog`='$hora_prog'";
        $condicion = "Fecha='$fechaAux' AND idEdicion='$edicionAux' AND idRealiza_en='$idRealiza_enAux' AND activo = '1'";
        $this->editar($tabla,$datos,$condicion);
        $con1 = new ActualizarHora();
        $con1->actualizarHora($idRealiza_en,$edicion,$fecha);
        header("location: ../views/registrar.php?edicion=$edicion&name=$name&fecha=$fecha&realizada_en=$idRealiza_en");
    }
}
$actualizar = new actualizar();
$idRealiza_en = $_GET['realizada_en'];
$edicion = $_GET['edicion'];
$fecha = $_GET['fecha'];
$hora_prog = $_GET['hora_prog'];
$idProductor = $actualizar->obtenerId($_COOKIE[$_GET['name']]);
$idRealiza_enAux = $_GET['realizada_enAux'];
$edicionAux = $_GET['edicionAux'];
$fechaAux = $_GET['fechaAux'];
$hora_progAux = $_GET['hora_progAux'];
$name = $_GET['name'];
if($edicion != $edicionAux){
    $hora_prog = $actualizar->obtenerHora($edicion);
}
$actualizar->actualizar($idRealiza_en,$edicion,$fecha,$idProductor,$idRealiza_enAux,$edicionAux,$fechaAux,$hora_prog,$name);

?>