$(document).ready(function(){

  let URL = $('#UrlSite').val();
  let URL_Card_Zone = URL+"hub/POST/";
  let Zone = '';

  // CARGAMOS LOS PLANES TURISTICOS DENTRO UN CARD
  function list_plans(Zone)
  { 
  	let OPERATION = 'Plan-List-Card';
  	let ID_OPERATION = 'NTIgODUgMTcgNDkgODMgMzIgNDggOTQgMzkgNTQ=';
    cadena = "OPERATION=" + OPERATION + "&ID-OPERATION=" + ID_OPERATION + '&Zone=' + Zone;

    $.ajax({
      type:"POST",    
      url:URL_Card_Zone,                                     
      data:cadena,  
      success:function(Data){

	     $("#area-plan").html(Data);

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
  }// Finaliza la funcion list_plans

  // CARGAR EL LISTADO DE LOS PLANES AL CARGAR LA PAGINA
  $("#area-plan").val(function(){

    let Zone = $(this).attr('area-plan-data');
    list_plans(Zone);

  });

}); 