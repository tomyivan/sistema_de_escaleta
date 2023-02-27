<div class="row">
<div class="col-sm-6">
	<form class="row g-3">

  <div class="col-auto">

    <input type="text" class="form-control form-control-sm" id="descripcion" name="descripcion" placeholder="Ingrese la descripcion" style="width:300px" autofocus>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-outline-primary btn-sm" id="registrar">Registrar</button>
  </div>
</form>
</div>	
<div class="col-sm-6">
	   <form class="d-flex" action="../php/actualizarTabla.php" method="GET" role="Editar">
        <select id="Realizada_en" class="form-select form-select-sm"  name="realizada_en">
        <?php 
          $select->editRealiza_en($_GET['realizada_en']);
        ?>		
        </select>
        <select id="Edicion" class="form-select form-select-sm" selected="" name="edicion">
      <?php 
          $select->editEdicion($_GET['edicion']);
        ?>	                           
        </select>
      <input class="form-control form-control-sm" type="date" name='fecha' value="<?php echo $_GET['fecha']?>">
      <input class="form-control form-control-sm" type="time" name='hora_prog' value="<?php echo $hora ?>">
      <!--formulario Anterior-->
      <input type="text" name="name" value="<?php echo $name;?>" hidden> 

      <select id="Realizada_en" class="form-select form-select-sm"  name="realizada_enAux" hidden>
        <?php 
          $select->editRealiza_en($_GET['realizada_en']);
        ?>		
        </select>
        <select id="Edicion" class="form-select form-select-sm" selected="" name="edicionAux" hidden>
      <?php 
          $select->editEdicion($_GET['edicion']);
        ?>	                           
        </select>
      <input class="form-control form-control-sm" type="date" name='fechaAux' value="<?php echo $_GET['fecha']?>" hidden>
      <input class="form-control form-control-sm" type="time" name='hora_progAux' value="<?php echo $hora ?>" hidden>
      <!--fin formulario Anterior-->
      <button class="btn btn-outline-primary btn-sm" type="submit">Editar</button>
    </form>
</div>
</div>
