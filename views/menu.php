<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="escaleta.php?name=<?php echo $name; ?>"   style="color: white;">BOLIVISION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: white;" data-bs-toggle="modal" data-bs-target="#ingresar" data-bs-whatever="@fat">Nuevo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"  style="color: white;" data-bs-toggle="modal" data-bs-target="#recuperar" data-bs-whatever="@fat">Recuperar</a>
        </li>
      </ul>
      <span class="navbar-text" >
       
          <li class="nav-item dropdown" style="list-style: none;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"   style="color: white;">
            <?php echo $_COOKIE[$name] ?>
          </a>
          <ul class="dropdown-menu" style="padding-right: 100px;">
            <li><a class="dropdown-item" href="#">Configuracion</a></li>
            <li><a class="dropdown-item" href="#">Salir</a></li>
          </ul>
        </li>
     
      </span>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="ingresar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">INGRESAR NUEVA ESCALETA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="GET" action="registrar.php">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <label class="form-label">Edicion</label>
              <select class="form-select" name="edicion" id="edicion">
                <?php 
                  $select->addEdicion();
                ?>
              </select>
              <input type="text" name="name" value="<?php echo $name;?>" hidden> 
              <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" hidden>
            </div>
            <div class="col-sm-6">
              <label class="form-label">Realizada en:</label>
              <select class="form-select" name="realizada_en" id="realizada_en">
                <?php 
                  $select->addRealiza_en();
                ?>
              </select>
            </div>
          </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Ingresar</button>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal RECUPERAR-->
<div class="modal fade" id="recuperar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recuperar Escaleta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="GET"  action="../php/recuperar.php?name=<?php echo $name ?>" >
                        
                       <div class="row justify-content-center">
                       <div class="col-sm-12">
                       <label class="col-sm-3 col-form-label" >Fecha</label>
                        <input type="date" class="form-control col-sm-3" value="<?php echo date('Y-m-d'); ?>" name="fecha"><br>
                       </div>
                        <div class="col-sm-6">
                       
                        <label class="form-label">Edicion</label>
                        <select id="Edicion" class="form-select" name="edicion">
                           <?php $select->addEdicion();?>
                        </select><br>

                        <input type="hidden" name="name" value="<?php echo  $name; ?>">
                        </div><div class="col-sm-6">
                        <label class="form-label">Realizada en:</label>
                        <select id="Realizada_en" class="form-select" name="realizada_en">
                           <?php 
                            $select->addRealiza_en();
                           ?>
                        </select><br>
                    </div></div>
                    
                   
                    <div class="modal-footer">
                     
                        <input type="submit" value="Ingresar" class="btn btn-primary" name="Registrar" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>