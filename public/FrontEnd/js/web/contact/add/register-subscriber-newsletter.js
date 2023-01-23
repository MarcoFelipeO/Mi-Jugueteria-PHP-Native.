$(document).ready(function(){
	$('#Btn-Add-Subscribe-Newsletter').click(function(){
    let SITE_KEY_RECAPTCHA = '6LcLva0aAAAAADSX3dtfQMNMUdAlfEcebWHDbPk0';
    
    grecaptcha.ready(function() {
      grecaptcha.execute(SITE_KEY_RECAPTCHA, {action: 'homepage'})
        .then(function(token) {
                
        $('#google-response-token').val(token);

        URL = $("#UrlSite").val();
        URL_Process = URL+"hub/registration/";
        datos = $('#Form-Newsletter').serialize();
    	  data_Operacion = datos+'&OPERATION=Register-Newsletter-Subscriber';

        const process__response = document.querySelectorAll('#Btn-Add-Subscribe-Newsletter');
        process__response.forEach(element => {
          element.innerHTML = `
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="sr-only">Loading...</span>
          `;
        });

        const btnPrincipal = document.querySelector('#Btn-Add-Subscribe-Newsletter');
        btnPrincipal.setAttribute('disabled', 'disabled');

        $.ajax({
          type:"POST",
          url:URL_Process,
          data:data_Operacion,
          success:function(data){

            let jsonData = JSON.parse(data);

            if(jsonData.success == "1")
            {
              let Mensaje = `           
              	<h4 class="mb-4">
                    <span class="text-primary text-uppercase">THANKS FOR SIGNING UP</span>.
                </h4> 
              `;

              $("#Response-Server-Newsletter").html(Mensaje);
            }

            if(jsonData.error == "1")
            {
              let Mensaje = `
                <h4 class="mb-4">
                    <span class="text-primary text-uppercase">SE PRODUJO UN ERROR NO ESPERADO, RECARGA EL SITIO WEB Y VUELVE A INTENTARLO.</span>.
                </h4>
              `;

              $("#Response-Server-Newsletter").html(Mensaje);
            }

            if(jsonData.error == "2")
            {
              let Mensaje = `           
                <h4 class="mb-4">
                    <span class="text-primary text-uppercase"><strong>¡Oops!</strong> Alguno de los datos son incorrectos, verificar los campos (Email), recarga el sitio web y vuelve a intentarlo</span>.
                </h4>
              `;

              $("#Response-Server-Newsletter").html(Mensaje);
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

            $("#Response-Server-Newsletter").html(Mensaje);

            process__response.forEach(element => {
              element.innerHTML = `
              	<i class="bi bi-arrow-counterclockwise"></i> Reintentar
              `;
            });

            btnPrincipal.removeAttribute('disabled', 'disabled');

          }
        });//   Finaliza el ajax
      });
    });
	});//	Finaliza el click
});//	Finaliza el ready  