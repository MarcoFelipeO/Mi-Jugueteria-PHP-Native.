$(document).ready(function(){

  let URL = $('#UrlSite').val();
  let URL_user_list = URL+"users/user_list/";

  let Filtro = '';
  let Pagina = 1;
  let Tcuenta = '';

  // CARGAMOS EL LISTADO DE USUARIOS CUANDO FINALICE LA CARGA DEL MODULO
  function user_list(Filtro, Pagina, Tcuenta)
  {        
    cadena = "Filter=" + Filtro + "&Page=" + Pagina + "&Account-Type-Filter=" + Tcuenta;

    $.ajax({
      type:"POST",    
      url:URL_user_list,                                     
      data:cadena,  
      success:function(Data){

        $("#user-filter-result").html(Data);

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
  }// Finaliza la funcion user_list

  //  PAGINACION DEL LISTADO
  $('.btnPagination').click(function(){

    let Filtro = '';
    let Pagina = $(this).val();
    let Tcuenta = '';

    let Mensaje = `           
      <tr>
        <td colspan="4" class="text-center">
          <div class="d-flex justify-content-center">
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          </div> 
        </td>
      </tr>
    `;
    $("#search-status").html(Mensaje);

    user_list(Filtro, Pagina, Tcuenta);

  });
}); 