<?php
	include_once('static/templeate/start-template.php');
    include_once('static/templeate/landscape_menu.php');
?>

<main class="main">

  <?php include_once('static/templeate/upright_menu.php'); ?>

  <div class="content">
    <div class="py-4 px-3 px-md-4">

      <div class="mb-3 mb-md-4 d-flex justify-content-between">
        <div class="h3 mb-0"><?php echo $this->Module; ?></div>
      </div>

      <!-- MENSAJE PARA EL USUARIO (MENSAJE QUE REGRESARA EL ESTATUS DEL LISTADO O BUSQUEDA) -->
      <div class="row">
        <div class="col-12" id="Response-Server"></div>
      </div>

      <!-- CARD FILTRO -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <!-- START ROW -->
              <div class="row justify-content-center">
                <!-- AGREGAR USUARIO -->
                <div class="col-md-4 ml-auto p-2 d-inline-block">
                  <a href="<?php echo constant('URL'); ?>users/?Ins=Form-New-User" class="btn btn-dark" title="Agregar un nuevo usuario.">
                    <i class="bi bi-plus-circle"></i> <span class="" >Usuario</span>
                  </a>
                  <div class="row"></div>
                </div>

                <!-- BUSCADOR -->
                <div class="col-md-5 ml-auto p-2 d-inline-block">
                  <div class="input-group">
                    <div class="input-group-append">
                      <i class="gd-search icon-text icon-text-sm"></i>
                    </div>
                    <input type="text" id="Filter-User-List" class="form-control form-control-icon-text" placeholder="Search" title="Filtrar usando el nombre o email del usuario.">
                  </div>
                </div>

                <!-- SELECTOR -->
                <div class="col-md-3 ml-auto p-2 d-inline-block">
                  <select class="form-control text-center" name="Type-Account-User" id="Type-Account-New-User" title="Filtrar por tipo de cuenta">
                    <option value="0">Tipo de cuenta</option>
                    <?php

                      if(empty($this->account_types)){
                        echo '
                          <option value="0">No hay resultados.</option>
                        ';
                      }else{
  
                        foreach($this->account_types as $row):
                          $Item = new account_types_OBJ();
                          $Item = $row; 

                          $Pk          = $Item->Pk;
                          $Title       = $Item->Title;
                          $Description = $Item->Description;

                          echo '
                            <option value="'.$Pk.'" title="'.$Description.'">'.$Title.'</option>
                          ';

                        endforeach;
                      } 
                    ?>
                  </select>
                </div>
              </div>
              <!-- END ROW -->
            </div>
          </div>  
        </div> 
      </div>

      <hr>

      <!-- LISTA USUARIOS -->
      <div class="row">
        <div class="col-12">
          <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
              <!-- Users -->
              <div class="table-responsive-xl">
                <div id="user-filter-result">

                  <div class="d-flex justify-content-center">
                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                  </div>

                </div>
              </div>
              <!-- End Users -->
            <!-- </div>    -->
          <!-- </div>      -->
        </div>     
      </div>

    </div>
  </div>
</main>

<?php
    include_once('static/templeate/template-ends.php');
?>