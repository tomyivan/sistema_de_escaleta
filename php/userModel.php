<?php
class User extends Conectar{
    
    public function getUser($nombreUsuario, $pass){
        $sql = "SELECT * FROM `productor` WHERE `nombreUsuario`='$nombreUsuario' and `Pass`='$pass'";
        $this->editar("`productor`","`activo` = '2'","`nombreUsuario`='$nombreUsuario' and `Pass`= '$pass'");
        $result = $this->conectar()->query($sql);
        $registro  = $result->fetch_array(MYSQLI_BOTH);
        $nombre = '';
        $rol = "";
        if(!empty($registro['Nombre'])){
        	$nombre = $registro['Nombre'];
        }
        $numRows = $result->num_rows;//devuelve el numero de usuario con esas caracteristicas 
        if($numRows !== false && $numRows ==1){
            return [True,$nombre];
        }
        else{
            return [False,$nombre];
        }
        
    }
}