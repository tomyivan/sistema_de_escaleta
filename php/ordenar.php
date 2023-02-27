<?php 
include_once('conexion.php');
class mover extends Conectar{
	public function mover(){

	$position = $_POST['position'];

	$i=1;
	foreach($position as $k=>$v){
	    $sql = "Update periodismo SET ordenPosicion=".$i." WHERE Id=".$v;
	    $this->conectar()->query($sql);
		$i++;
	}

	}
}

$mover = new mover();
$mover->mover(); 
?>