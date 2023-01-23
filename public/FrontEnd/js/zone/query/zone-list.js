$(document).ready(function(){

  let URL = $('#UrlSite').val();
  let URL_zone_list = URL+"zone/zone_list/";

  let Filtro = '';
  let Pagina = 1;
  let Status_Zone = '';

  // CARGAMOS EL LISTADO DE ZONAS CUANDO FINALICE LA CARGA DEL MODULO
  function zone_list(Filtro, Pagina, Status_Zone)
  {        
    cadena = "Filter=" + Filtro + "&Page=" + Pagina + "&Tourist-Zone-Status=" + Status_Zone;

    $.ajax({
      type:"POST",    
      url:URL_zone_list,                                     
      data:cadena,  
      success:function(Data){

        $("#zone-filter-result").html(Data);

      },error: function(){

        let Mensaje = `           
          <div class="alert alert-danger alert-left-bordered border-danger alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
            <i class="bi bi-emoji-neutral text-danger-darker mr-2"></i>
            <p class="mb-0">
              <strong>¡Oops!</strong> Algo salió mal.
            </p>
            <p class="mb-0">
              <strong><i class="bi bi-exclamation-circle"></i></strong>¿Es esto un error? Recarga el sitio web y vuelve a intentarlo, si persiste el error comuniquese con el equipo de soporte técnico.
            </p>
            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
              <i class="gd-close icon-text icon-text-xs" aria-hidden="true"></i>
            </button>
          </div>   
        `;
        $("#Response-Server").html(Mensaje);

      }
    }); //  Finaliza el ajax    
  }// Finaliza la funcion zone_list

  zone_list(Filtro, Pagina, Status_Zone);

  // RETARDO EN EL FILTRO
  function delay(callback, ms) {
    var timer = 0;
    return function() {
      var context = this, args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () {
        callback.apply(context, args);
      }, ms || 0);
    };
  }

  // PARA FILTRAR LA LISTA DE ZONAS SEGUN LO 
  // INGRESADO EN EL BUSCADOR POR EL USUARIO
  $('#Filter-Zone-List').keyup(delay(function(){

    let Filtro = $(this).val();
    let Pagina = '';
    let Status_Zone = '';
    let timeout;

    let Mensaje = `           
      <tr>
        <td colspan="7" class="text-center">
          <div class="d-flex justify-content-center">
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div> 
        </td>
      </tr>
    `;
    $("#search-status").html(Mensaje);

    zone_list(Filtro, Pagina, Status_Zone);

  }, 1000));

  // PARA FILTRAR LA LISTA DE ZONAS SEGUN SU ESTATUS
  $('#Tourist-Zone-Status').change(delay(function(){

    let Filtro = '';
    let Pagina = '';
    let Status_Zone = $(this).val();

    let Mensaje = `           
      <tr>
        <td colspan="7" class="text-center">
          <div class="d-flex justify-content-center">
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div> 
        </td>
      </tr>
    `;
    $("#search-status").html(Mensaje);

    zone_list(Filtro, Pagina, Status_Zone);

  }, 1000));

}); 