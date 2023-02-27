<?php 
include_once "conexion.php";
class recuperar extends Conectar{
	public function recuperar($name,$realizada_en,$fecha,$edicion){
		$sql = "UPDATE `periodismo` SET `activo` = 1 WHERE `periodismo`.`idRealiza_en`= '$realizada_en' AND `periodismo`.`fecha`='$fecha' AND `periodismo`.`idEdicion` = '$edicion'";
		$resp = $this->conectar()->query($sql);
		if(empty($resp)){
			echo "Ocurrio un errror";
		}else{
			header('location: ../views/registrar.php?name='.$name.'&realizada_en='.$realizada_en.'&fecha='.$fecha.'&edicion='.$edicion);
		}
	}
}
$recuperar = new recuperar();
$name = $_GET['name'];
$realizada_en = $_GET['realizada_en'];
$fecha = $_GET['fecha'];
$edicion = $_GET['edicion'];
$recuperar->recuperar($name,$realizada_en,$fecha,$edicion);
?>