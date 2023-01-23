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
            # UN USUARIO DE LA EMPRESA QUIERE ACTUALIZAR DATOS DE LA ZONA 
            # QUE RECIBIMOS SU FK POR GET
            if($this->GET_FK_Zone != '')
            {
              if(empty($this->selected_zone)){
                echo '
                  <h1 class="h2 text-dark">
                    No logramos identificar la zona seleccionada.
                  </h1>
                ';
              }else{
                foreach($this->selected_zone as $row):
                  $Item = new zones();
                  $Item = $row; 

                  $PK         = $Item->PK;
                  $Name       = $Item->Name;
                  $Latitude   = $Item->Latitude;
                  $Longitude  = $Item->Longitude;
                  $Link_Google_Maps = $Item->Link_Google_Maps;
                  $Embed_Google_Maps = $Item->Embed_Google_Maps;
                  $Call_Action = $Item->Call_Action;
                  $FK_Status_Zone = $Item->FK_Status_Zone;
          ?>
                <div class="card">
                  <div class="card-body">
                      <!-- START FORM -->
                      <form id="Form-Updt-Tourist-Zone" autocomplete="off">

                        <!-- TITTLE -->
                        <div class="form-row">
                          <h1 class="h3 font-weight-bold"><?php echo $this->Module; ?></h1>
                        </div>

                        <hr>

                        <div class="form-row">
                          <div class="form-group col-md-12" title="Obligatorio">
                            <label for="Name-New-Zone"> 
                              <span class="text-danger">
                                <i class="bi bi-chevron-double-right"></i>
                              </span> 
                              Titulo o Nombre de la zona turistica
                            </label>
                            <input type="text" class="form-control text-center" name="Name-Zone" id="Name-New-Zone" placeholder="Ejemplo: Peto, Yucatán" minlength="5" maxlength="60" title="Esta información será visible para todos. [Longitud minima de 5 caracteres y máxima de 60 caracteres]" value="<?php echo $Name; ?>">
                          </div>

                          <div class="form-group col-md-6" title="Opcional">
                            <label for="New-Latitude-Zone"> 
                              <span class="text-primary">
                                <i class="bi bi-chevron-right"></i>
                              </span> 
                              Latitud
                            </label>
                            <input type="text" class="form-control text-center" name="Latitude-Zone" id="New-Latitude-Zone" placeholder="Ejemplo: 20.1219018" maxlength="15" title="Esta información será visible para todos. [Longitud máxima de 15 caracteres]" value="<?php echo $Latitude; ?>">
                          </div>

                          <div class="form-group col-md-6" title="Opcional">
                            <label for="New-Longitude-Zone"> 
                              <span class="text-primary">
                                <i class="bi bi-chevron-right"></i>
                              </span> 
                              Longitud
                            </label>
                            <input type="text" class="form-control text-center" name="Longitude-Zone" id="New-Longitude-Zone" placeholder="Ejemplo: -88.9562837" maxlength="15" title="Esta información será visible para todos. [Longitud máxima de 15 caracteres]" value="<?php echo $Longitude; ?>">
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6" title="Obligatorio">
                            <label for="Link-Google-Maps-New-Zone"> 
                              <span class="text-danger">
                                <i class="bi bi-chevron-double-right"></i>
                              </span> 
                              Enlace de google maps
                            </label>
                            <input type="text" class="form-control text-center font-italic text-primary" name="Link-Google-Maps-Zone" id="Link-Google-Maps-New-Zone" placeholder="Ejemplo: https://goo.gl/maps/4qycpToFRLatcbmC9" autocomplete="off" maxlength="60" title="Esta información será visible para todos. [Longitud máxima de 60 caracteres]" value="<?php echo $Link_Google_Maps; ?>">
                          </div>

                          <div class="form-group col-md-6" title="Obligatorio">
                            <label for="Tourist-Zone-Status"> 
                              <span class="text-danger">
                                <i class="bi bi-chevron-double-right"></i>
                              </span> 
                              Estatus de la zona
                            </label>
                            <select class="form-control text-center" name="Tourist-Zone-Status" id="Tourist-Zone-Status" title="Filtrar por estatus de la zona">
                              <option value="0">Estatus de la zona</option>
                              <?php

                                if(empty($this->tourist_zone_status)){
                                  echo '
                                    <option value="0">No hay resultados.</option>
                                  ';
                                }else{
            
                                  foreach($this->tourist_zone_status as $row):
                                    $Item = new types_status_tourist_areas_OBJ();
                                    $Item = $row; 

                                    $Pk_Status   = $Item->Pk;
                                    $Name_Status = $Item->Name;
                                    $Description = $Item->Description;

                                    if($Pk_Status == $FK_Status_Zone)
                                    {
                                      echo '
                                        <option value="'.$Pk_Status.'" title="'.$Description.'" selected="selected">'.$Name_Status.'</option>
                                      ';
                                    }else{
                                      echo '
                                        <option value="'.$Pk_Status.'" title="'.$Description.'">'.$Name_Status.'</option>
                                      ';
                                    }

                                  endforeach;
                                } 
                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-12" title="Opcional">
                            <label for="Embed-New-Google-Maps"> 
                              <span class="text-primary">
                                <i class="bi bi-chevron-right"></i>
                              </span> 
                              Incrustar un mapa (embed a google maps)
                            </label>
                            <textarea class="form-control text-center font-italic text-primary" name="Embed-Google-Maps" id="Embed-New-Google-Maps" placeholder="Medidas soportadas: Por especificar." autocomplete="off" maxlength="500" title="Esta información será visible para todos. [Longitud máxima de 500 caracteres]"><?php echo $Embed_Google_Maps; ?></textarea>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-12" title="Opcional">
                            <label for="New-Call-Action"> 
                              <span class="text-primary">
                                <i class="bi bi-chevron-right"></i>
                              </span> 
                              Mensaje que enamora (Llamado a la acción)
                            </label>
                            <textarea class="form-control text-center" name="Call-Action" id="New-Call-Action" placeholder="Virtudes de la zona o llamado a la acción" autocomplete="off" minlength="10" maxlength="300" title="Esta información es visible para todos. [Longitud minima de 10 caracteres y máxima de 300 caracteres]"><?php echo $Call_Action; ?></textarea>
                          </div>
                        </div>
                        <input type="hidden" name="PK-Zone" value="<?php echo $PK; ?>">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <button type="button" class="btn btn-outline-danger float-left col" id="Btn-Updt-Zone">
                              <i class="bi bi-pencil-square"></i> Actualizar
                            </button>
                          </div>
                        </div>

                      </form>

                  </div>
                </div>
          <?php
                endforeach;
              }#  Finaliza la validacion de que hay datos de la zona
            }#  Finaliza la validacion que recibimos datos de la zona
          ?>
        </div>
      </div>

    </div>
  </div>
</main>

<?php
    include_once('static/templeate/template-ends.php');
?>