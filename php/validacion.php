<?php 
include_once "conexion.php";
class validacion extends Conectar{
	public function validacion($nombre){

		$response = $this->mostrarCondicion("`productor`.`activo`","`productor`","`productor`.`nombreUsuario` = '$nombre'" );
		$registro = $response->fetch_array(MYSQLI_BOTH);
		if($registro['activo']!=2){
			header("location: ../index.php");
		}
	}
}
?>