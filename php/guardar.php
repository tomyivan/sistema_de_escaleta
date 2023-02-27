<?php 
include_once "conexion.php";
class guardar extends Conectar{
	public function guardar($name,$realizada_en,$fecha,$edicion){
		$sql = "UPDATE `periodismo` SET `activo` = 2 WHERE `periodismo`.`idRealiza_en`= '$realizada_en' AND `periodismo`.`fecha`='$fecha' AND `periodismo`.`idEdicion` = '$edicion'";
		$resp = $this->conectar()->query($sql);
		if(empty($resp)){
			echo "Ocurrio un errror";
		}else{
			header('location: ../views/escaleta.php?name='.$name);
		}
	}
}
$guardar = new guardar();
$name = $_GET['name'];
$realizada_en = $_GET['realizada_en'];
$fecha = $_GET['fecha'];
$edicion = $_GET['edicion'];
$guardar->guardar($name,$realizada_en,$fecha,$edicion);
?>