<?php
include_once 'conexion.php';

class autoCompleado extends Conectar {
    public function formato($datos){
        $datos = str_replace("[","",$datos);
        $datos = str_replace("]","",$datos);
        $datos = str_replace('"',"",$datos);
        return $datos;
    }
    public function presentador(){
        $response = $this->mostrarCondicion("*","`presentador`","1");
        $presentador =[];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){    
            $presentador[] = $registro['NombrePresentador'];
        }   
        $resp = $this->formato(json_encode($presentador, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
    public function formato_p(){
        $response = $this->mostrarCondicion("*","`formato`","1");
        $formato = [];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            $formato[]=$registro['nomFormato'];            
        }
        $resp = $this->formato(json_encode($formato, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
     public function ciudad(){
        $response = $this->mostrarCondicion("*","`ciudad`","1");
        $ciudad = [];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            $ciudad[]=$registro['nomCiudad'];            
        }
        $resp = $this->formato(json_encode($ciudad, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
     public function periodista(){
        $response = $this->mostrarCondicion("*","`periodista`","1");
        $periodista = [];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            $periodista[]=$registro['NombrePeriodista'];            
        }
        $resp = $this->formato(json_encode($periodista, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
     public function editor(){
        $response = $this->mostrarCondicion("*","`editor`","1");
        $editor = [];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            $editor[]=$registro['NombreEditor'];            
        }
        $resp = $this->formato(json_encode($editor, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
     public function contenido(){
        $response = $this->mostrarCondicion("*","`contenido`","1");
        $contenido = [];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            $contenido[]=$registro['nomContenido'];            
        }
        $resp = $this->formato(json_encode($contenido, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
     public function bloque(){
        $response = $this->mostrarCondicion("*","`bloque`","1");
        $bloque = [];
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            $bloque[]=$registro['nomBloque'];            
        }
        $resp = $this->formato(json_encode($bloque, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }
    public function emitido(){
        $emitido = ['','SI','NO'];
        $resp = $this->formato(json_encode($emitido, JSON_UNESCAPED_UNICODE));
        echo $resp;
    }


   
}
$completado = new autoCompleado();
if(!empty($_POST['sw'])){
    $sw = $_POST['sw']; 
    if($sw == 1){
        $completado->presentador(); 
    } if($sw==2){
        $completado->formato_p();
    } if($sw == 3){
        $completado->ciudad();
    }if($sw==4){
        $completado->periodista();
    }if($sw == 5){
        $completado->editor();
    }if($sw==6){
        $completado->contenido();
    }if($sw == 7){
        $completado->bloque();
    }if($sw == 8){
        $completado->emitido();
    }
}
?>