$(document).ready(function(){
	//	FORZAMOS EL VACIADO DEL FORMULARIO
	$("#Form-Add-User")[0].reset();

	$('#Btn-Add-User').click(function(){
    URL = $("#UrlSite").val();
    URL_Process = URL+"users/register_new_user/";
    datos = $('#Form-Add-User').serialize();

    const process__response = document.querySelectorAll('#Btn-Add-User');
    process__response.forEach(element => {
      element.innerHTML = `
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        <span class="sr-only">Loading...</span>
      `;
    });

    const btnPrincipal = document.querySelector('#Btn-Add-User');
    btnPrincipal.setAttribute('disabled', 'disabled');

    $.ajax({
      type:"POST",
      url:URL_Process,
      data:datos,
      success:function(data){

        let jsonData = JSON.parse(data);

        if(jsonData.success == "1")
        {
          let Mensaje = `           
          	<div class="alert alert-primary alert-left-bordered border-primary alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
	            <i class="bi bi-check-circle text-primary-darker mr-2"></i>
	            <p class="mb-0">
                <strong>¡Ok!</strong> Haz creado una nueva cuenta de usuario.
              </p>
	            <button type="button" class="close" aria-label="Close" data-dismiss="alert">
	              <i class="gd-close icon-text icon-text-xs" aria-hidden="true"></i>
	            </button>
          	</div>   
          `;

          $("#Response-Server").html(Mensaje);
        }

        if(jsonData.error == "1")
        {
          let Mensaje = `           
          	<div class="alert alert-danger alert-left-bordered border-danger alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
	            <i class="bi bi-emoji-neutral text-danger-darker mr-2"></i>
	            <p class="mb-0">
                <strong>¡Oops!</strong> Alguno de los datos son incorrectos, verificar los campos (Nombres, Apellidos, Email, Password, Tipo de cuenta).
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

        if(jsonData.error == "2")
        {
          let Mensaje = `           
          	<div class="alert alert-danger alert-left-bordered border-danger alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
	            <i class="bi bi-emoji-neutral text-danger-darker mr-2"></i>
	            <p class="mb-0">
                <strong>¡Oops!</strong> Correo ocupado, este correo ya está ocupado por otro usuario.
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

        if(jsonData.error == "3")
        {
          let Mensaje = `           
          	<div class="alert alert-danger alert-left-bordered border-danger alert-dismissible d-flex align-items-center p-md-4 mb-2 fade show" role="alert">
	            <i class="bi bi-emoji-neutral text-danger-darker mr-2"></i>
	            <p class="mb-0">
                <strong>¡Oops!</strong> No pudimos crear la nueva cuenta, verifica todos los datos y vuelve a intentarlo.
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

        process__response.forEach(element => {
          element.innerHTML = `
          	<i class="bi bi-plus-circle-fill"></i> Registrar
          `;
        });

        btnPrincipal.removeAttribute('disabled', 'disabled');

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

        process__response.forEach(element => {
          element.innerHTML = `
          	<i class="bi bi-arrow-counterclockwise"></i> Reintentar
          `;
        });

        btnPrincipal.removeAttribute('disabled', 'disabled');

      }
    });//   Finaliza el ajax
	});//	Finaliza el click
});//	Finaliza el ready  