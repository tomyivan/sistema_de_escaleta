<?php 
include_once "conexion.php";
include_once "selectList.php";
class mostrarTabla extends Conectar{
    public function obtenerId($nombreProductor){
        $response = $this->mostrarCondicion("`idProductor`","`productor`","`Nombre`='$nombreProductor'");
        $registro = $response->fetch_array(MYSQLI_BOTH);
        return $registro['idProductor'];
    }
    public function mostrarTabla($fecha,$realizada_en,$edicion,$idProductor){
        $columnas = "`periodismo`.`Id`,`periodismo`.`flag`,`periodismo`.`ordenPosicion`,`periodismo`.`numero`,`productor`.`Nombre`,`presentador`.`NombrePresentador`,`periodismo`.`emitido`,`periodismo`.`Descripcion`,`formato`.`nomFormato`,`ciudad`.`nomCiudad`,`periodista`.`NombrePeriodista`,`editor`.`NombreEditor`,`contenido`.`nomContenido`,`bloque`.`nomBloque`,`periodismo`.`Duracion`,`periodismo`.`Hora_Prog`";
        $tabla = "`periodismo` INNER JOIN `productor` ON `productor`.`idProductor` = `periodismo`.`idProductor` INNER JOIN `presentador` ON `presentador`.`idPresentador` = `periodismo`.`idPresentador` INNER JOIN `formato` ON `formato`.`idFormato` = `periodismo`.`idFormato` INNER JOIN `ciudad` ON `ciudad`.`idCiudad`=`periodismo`.`idCiudad` INNER JOIN `periodista` ON `periodista`.`idPeriodista` = `periodismo`.`idPeriodista` INNER JOIN `editor` ON `editor`.`idEditor` = `periodismo`.`idEditor` INNER JOIN `contenido` ON `contenido`.`idContenido` = `periodismo`.`idContenido` INNER JOIN `bloque` ON `bloque`.`idBloque` = `periodismo`.`idBloque`";
        $condicion = "`periodismo`.`fecha`='$fecha' and `periodismo`.`idRealiza_en`  ='$realizada_en' and `periodismo`.`idEdicion` = '$edicion' AND `periodismo`.`idProductor` = '$idProductor' and `periodismo`.`activo`= 1 ORDER BY `ordenPosicion` ASC";
        return $this->mostrarCondicion($columnas,$tabla,$condicion);
    }
    public function view($fecha,$realizada_en,$edicion,$nomProductor){
        $select = new selectList();
        $idProductor = $this->obtenerId($nomProductor);
        $response = $this->mostrarTabla($fecha,$realizada_en,$edicion,$idProductor);
        while($registro = $response->fetch_array(MYSQLI_BOTH)){
            ?>
             <tr data-id="<?php echo $registro['Id']?>" id="<?php echo $registro['Id']?>">
                 <td style="display: none;">
                     <span class='tabledit-span tabledit-identifier'><?php echo $registro['Id']?></span>
                     <input class='tabledit-input tabledit-identifier' type='hidden' name='id' value='<?php echo $registro['Id'] ?>' disabled=''>               
                 </td>
                 <td><?php echo $registro['ordenPosicion'];?></td>
                 <td><?php echo $registro['Nombre'];?></td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>    
                     <span class='tabledit-span'><?php echo $registro['NombrePresentador'];?></span>
                     <input class='tabledit-input form-control form-control-sm presentador' type='text' name='presentador' value='<?php echo $registro['NombrePresentador'];?>' style='display: none; width: 100px' disabled=''>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>
                     <span class='tabledit-span'><?php echo $registro['emitido'];?></span>
                     <select class='tabledit-input form-select form-select-sm emitido' name='emitido' style='display: none; width: 80px' disabled=''>
                     <option value='SI'>SI</option>
                     <option value='NO'>NO</option>
                     </select>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>    
                     <span class='tabledit-span'><?php echo $registro['Descripcion']?></span>
                     <input class='tabledit-input form-control form-control-sm descripcion' type='text' name='descripcion' value='<?php echo $registro['Descripcion']?>' style='display: none; width: 200px' disabled=''>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>
                     <span class='tabledit-span'><?php echo $registro['nomFormato'];?></span>
                     <select class='tabledit-input form-select form-select-sm formato' name='formato' style='display: none; width: 100px' disabled=''>
                        <?php 
                            $select->formato();
                        ?>
                    </select>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>
                     <span class='tabledit-span'><?php echo $registro['nomCiudad'];?></span>
                     <select class='tabledit-input form-select form-select-sm ciudad' name='ciudad' style='display: none; width: 100px' disabled=''>
                        <?php 
                            $select->ciudad();
                        ?> 
                    </select>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>    
                     <span class='tabledit-span'><?php echo $registro['NombrePeriodista'];?></span>
                     <input class='tabledit-input form-control form-control-sm periodista' type='text' name='periodista' value='<?php echo $registro['NombrePeriodista'];?>' style='display: none; width: 100px' disabled=''>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>    
                     <span class='tabledit-span'><?php echo $registro['NombreEditor'];?></span>
                     <input class='tabledit-input form-control form-control-sm editor' type='text' name='editor' value='<?php echo $registro['NombreEditor'];?>' style='display: none; width: 100px' disabled=''>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>
                     <span class='tabledit-span'><?php echo $registro['nomContenido'];?></span>
                     <select class='tabledit-input form-select form-select-sm contenido' name='contenido' style='display: none; width: 100px' disabled=''>
                    <?php 
                        $select->contenido();
                    ?> 
                    </select>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>
                     <span class='tabledit-span'><?php echo $registro['nomBloque'];?></span>
                     <select class='tabledit-input form-select form-select-sm bloque' name='bloque' style='display: none; width: 80px' disabled=''>
                    <?php 
                        $select->bloque();
                    ?> 
                    </select>
                 </td>
                 <td class='tabledit-view-mode' style='cursor: pointer;'>    
                     <span class='tabledit-span'><?php echo $registro['Duracion'];?></span>
                     <input class='tabledit-input form-control form-control-sm duracion' type='time' step="1" name='duracion' value='<?php echo $registro['Duracion'];?>' style='display: none; width: 120px' disabled=''>
                 </td>
                 <td><?php echo $registro['Hora_Prog'];?></td>
                 <td>
                     <div class='btn-group' role='group' aria-label='Basic mixed styles example'>               
                     <a class="eliminar btn btn-outline-danger" title="borrar" onclick="confirmaEliminar(<?php echo $registro['Id']; ?>)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                         <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                         <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                     </svg></a>
                     <div class="pintar<?php echo $registro['Id'];?>">      
                     <?php 
                     if($registro['flag'] == 0){
                         ?>  
                         <a class="btn btn-outline-warning" id='Pintar' onclick="pintar(<?php echo $registro['Id']; ?>,1)" title="pintar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
                         <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 12.707l7-7L10.293 7l-7 7H2v-1.293z"/>
                         </svg></a>
                         <?php }else if($registro['flag']==1){?>
                     <a class="btn btn-outline-warning" id='pintar' onclick="pintar(<?php echo $registro['Id']; ?>,2)" title="Quitar Pintado"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                     </svg></a>
                     <?php }?>
             </div>
             </div></td>
                 
             </tr>
             <?php 
         }
    }
}
$view = new mostrarTabla();
$fecha = $_POST['fecha'];
$realizada_en = $_POST['realizada_en'];
$edicion = $_POST['edicion'];
$nomProductor = $_COOKIE[$_POST['name']];
$view->view($fecha,$realizada_en,$edicion,$nomProductor);
?>