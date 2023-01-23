<?php
	include_once('static/templeate/start-template.php');
    include_once('static/templeate/landscape_menu.php');
?>

<main class="main">

  <?php include_once('static/templeate/upright_menu.php'); ?>

  <div class="content">
    <div class="py-4 px-3 px-md-4">

      <!-- MENSAJE PARA EL USUARIO (MENSAJE QUE REGRESARA EL ESTATUS DEL FORMULARIO) -->
      <div class="row">
        <div class="col-12" id="Response-Server"></div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <!-- START FORM -->
                <form id="Form-Add-User" autocomplete="off">

                  <!-- TITTLE -->
                  <div class="form-row">
                    <h1 class="h3 font-weight-bold"><?php echo $this->Module; ?></h1>
                  </div>

                  <hr>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Name-New-User">Nombre(s)</label>
                      <input type="text" class="form-control text-center" name="Name-User" id="Name-New-User" placeholder="Nombre(s)" minlength="2" maxlength="40">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="LastName-New-User">Apellido(s)</label>
                      <input type="text" class="form-control text-center" name="LastName-User" id="LastName-New-User" placeholder="Apellido(s)" minlength="2" maxlength="60">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="Email-New-User">Correo Electrónico</label>
                      <input type="email" class="form-control text-center" name="Email-User" id="Email-New-User" placeholder="Email" autocomplete="off" value="" minlength="8" maxlength="300">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="Type-Account-New-User">Tipo de cuenta</label>
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

                    <div class="form-group col-md-6">
                      <label for="Password-New-User">Contraseña</label>
                      <input type="password" class="form-control text-center" name="Password-New-User" id="Password-New-User" placeholder="Contraseña para la cuenta del usuario" minlength="8" maxlength="100" autocomplete="off" value="">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <button type="button" class="btn btn-outline-dark float-left col" id="Btn-Add-User">
                        <i class="bi bi-plus-circle-fill"></i> Registrar
                      </button>
                    </div>
                  </div>

                </form>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<?php
    include_once('static/templeate/template-ends.php');
?>