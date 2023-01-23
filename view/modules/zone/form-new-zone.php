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
                <form id="Form-Add-Zone" autocomplete="off">

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
                      <input type="text" class="form-control text-center" name="Name-New-Zone" id="Name-New-Zone" placeholder="Ejemplo: Peto, Yucatán" minlength="5" maxlength="60" title="Esta información será visible para todos. [Longitud minima de 5 caracteres y máxima de 60 caracteres]">
                    </div>

                    <div class="form-group col-md-6" title="Opcional">
                      <label for="New-Latitude-Zone"> 
                        <span class="text-primary">
                          <i class="bi bi-chevron-right"></i>
                        </span> 
                        Latitud
                      </label>
                      <input type="text" class="form-control text-center" name="New-Latitude-Zone" id="New-Latitude-Zone" placeholder="Ejemplo: 20.1219018" maxlength="15" title="Esta información será visible para todos. [Longitud máxima de 15 caracteres]">
                    </div>

                    <div class="form-group col-md-6" title="Opcional">
                      <label for="New-Longitude-Zone"> 
                        <span class="text-primary">
                          <i class="bi bi-chevron-right"></i>
                        </span> 
                        Longitud
                      </label>
                      <input type="text" class="form-control text-center" name="New-Longitude-Zone" id="New-Longitude-Zone" placeholder="Ejemplo: -88.9562837" maxlength="15" title="Esta información será visible para todos. [Longitud máxima de 15 caracteres]">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-12" title="Obligatorio">
                      <label for="Link-Google-Maps-New-Zone"> 
                        <span class="text-danger">
                          <i class="bi bi-chevron-double-right"></i>
                        </span> 
                        Enlace de google maps
                      </label>
                      <input type="text" class="form-control text-center" name="Link-Google-Maps-New-Zone" id="Link-Google-Maps-New-Zone" placeholder="Ejemplo: https://goo.gl/maps/4qycpToFRLatcbmC9" autocomplete="off" value="" maxlength="60" title="Esta información será visible para todos. [Longitud máxima de 60 caracteres]">
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
                      <textarea class="form-control text-center" name="Embed-New-Google-Maps" id="Embed-New-Google-Maps" placeholder="Medidas soportadas: Por especificar." autocomplete="off" value="" maxlength="500" title="Esta información será visible para todos. [Longitud máxima de 500 caracteres]"></textarea>
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
                      <textarea class="form-control text-center" name="New-Call-Action" id="New-Call-Action" placeholder="Virtudes de la zona o llamado a la acción" autocomplete="off" value="" minlength="10" maxlength="300" title="Esta información es visible para todos. [Longitud minima de 10 caracteres y máxima de 300 caracteres]"></textarea>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <button type="button" class="btn btn-outline-dark float-left col" id="Btn-Add-New-Zone">
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