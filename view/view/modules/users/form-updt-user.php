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
          <?php 
            # UN USUARIO DE LA EMPRESA QUIERE ACTUALIZAR DATOS DEL USUARIO 
            # QUE RECIBIMOS SU FK POR GET
            if($this->GET_FK_User != '')
            {
              if(empty($this->selected_user)){
                echo '
                  <h1 class="h2 text-dark">
                    No logramos identificar al usuario seleccionado.
                  </h1>
                ';
              }else{
          ?>

            <div class="form-row">
              <h1 class="h3 font-weight-bold"><?php echo $this->Module; ?></h1>
            </div>

            <hr>

            <div class="card">
              <div class="card-body">
                <!-- TITTLE -->

                <div class="form-row">
                  <h1 class="h3 font-weight-bold">TIPO DE CUENTA</h1>
                </div>

                <hr>

                <!-- START FORM -->
                <form id="Form-Updt-Account-Type" autocomplete="off">
                  <?php
                    foreach($this->selected_user as $row):
                      $Item = new user();
                      $Item = $row; 

                      $FK_Account_Type = $Item->FK_Account_Type;
                  ?>
                    <div class="form-row">
                      <div class="form-group col-md-12">
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

                                $Pk_Account  = $Item->Pk;
                                $Title       = $Item->Title;
                                $Description = $Item->Description;

                                if($FK_Account_Type == $Pk_Account)
                                {
                                  echo '
                                    <option value="'.$Pk_Account.'" title="'.$Description.'" selected="selected">'.$Title.'</option>
                                  ';
                                }else{
                                  echo '
                                    <option value="'.$Pk_Account.'" title="'.$Description.'">'.$Title.'</option>
                                  ';
                                }

                              endforeach;
                            } 
                          ?>
                        </select>
                      </div>
                    </div>
                  <?php
                    endforeach;
                  ?>
                  <input type="hidden" name="FK-User" value="<?php echo $this->GET_FK_User; ?>">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <button type="button" class="btn btn-outline-danger float-left col" id="Btn-Updt-Account-Type">
                        <i class="bi bi-pencil-square"></i> Actualizar
                      </button>
                    </div>
                  </div>

                </form>

              </div>
            </div>

          <?php
              }
            }
          ?>
          <?php
            # EL USUARIO ESTÁ LOGUEADO Y VA EDITAR EL MISMO SUS DATOS
            if($this->GET_FK_User == '' || $this->PK_User != '')
            {
              if(empty($this->selected_user)){
                echo '
                  <h1 class="h2 text-dark">
                    No logramos identificar al usuario seleccionado.
                  </h1>
                ';
              }else{
                foreach($this->selected_user as $row):
                  $Item = new user();
                  $Item = $row; 

                  $Pk         = $Item->Pk;
                  $Name       = $Item->Name;
                  $LastName   = $Item->LastName;
                  $Email      = $Item->Email;
                  $FK_Account_Type = $Item->FK_Account_Type;

          ?>

                <hr>

                <div class="card">
                  <div class="card-body">
                    <!-- TITTLE -->

                    <div class="form-row">
                      <h1 class="h3 font-weight-bold">DATOS PERSONALES</h1>
                    </div>

                    <hr>

                    <!-- START FORM -->
                    <form id="Form-Updt-My-Data" autocomplete="off">

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="Name-New-User">Nombre(s)</label>
                          <input type="text" class="form-control text-center" name="Name-User" id="Name-New-User" placeholder="Nombre(s)" minlength="2" maxlength="40" value="<?php echo $Name; ?>">
                        </div>

                        <div class="form-group col-md-6">
                          <label for="LastName-New-User">Apellido(s)</label>
                          <input type="text" class="form-control text-center" name="LastName-User" id="LastName-New-User" placeholder="Apellido(s)" minlength="2" maxlength="60" value="<?php echo $LastName; ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <button type="button" class="btn btn-outline-danger float-left col" id="Btn-Updt-My-Data">
                            <i class="bi bi-pencil-square"></i> Actualizar
                          </button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>

                <hr>

                <div class="card">
                  <div class="card-body">
                    <!-- TITTLE -->

                    <div class="form-row">
                      <h1 class="h3 font-weight-bold">DATOS DE ACCESO</h1>
                    </div>

                    <hr>

                    <!-- START FORM -->
                    <form id="Form-Updt-My-Email" autocomplete="off">

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="Email-New-User">Correo Electrónico</label>
                          <input type="email" class="form-control text-center" name="Email-User" id="Email-New-User" placeholder="Email" autocomplete="off" minlength="8" maxlength="300" value="<?php echo $Email; ?>">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <button type="button" class="btn btn-outline-danger float-left col" id="Btn-Updt-My-Email">
                            <i class="bi bi-pencil-square"></i> Actualizar
                          </button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>

                <hr>

                <div class="card">
                  <div class="card-body">
                    <!-- TITTLE -->

                    <div class="form-row">
                      <h1 class="h3 font-weight-bold">CLAVE DE ACCESO</h1>
                    </div>

                    <hr>

                    <!-- START FORM -->
                    <form id="Form-Updt-My-Password" autocomplete="off">

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="Password-New-User">Contraseña</label>
                          <input type="password" class="form-control text-center" name="Password-New-User" id="Password-New-User" placeholder="Contraseña para la cuenta del usuario" minlength="8" maxlength="100" autocomplete="off" value="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <button type="button" class="btn btn-outline-danger float-left col" id="Btn-Updt-My-Password">
                            <i class="bi bi-pencil-square"></i> Actualizar
                          </button>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>

          <?php
                endforeach;
              }#  Finaliza la validacion de que recibimos datos del usuario
            }#  Finaliza la validacion que el usuario activo que actuviar sus datos
          ?>
        </div>
      </div>

    </div>
  </div>
</main>

<?php
    include_once('static/templeate/template-ends.php');
?>