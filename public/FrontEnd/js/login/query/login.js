$(document).ready(function(){
  $('#Btn-Login').click(function(){

  	let SITE_KEY_RECAPTCHA = '6LcLva0aAAAAADSX3dtfQMNMUdAlfEcebWHDbPk0';
  	
	  grecaptcha.ready(function() {
	    grecaptcha.execute(SITE_KEY_RECAPTCHA, {action: 'homepage'})
	      .then(function(token) {
	              
	      $('#google-response-token').val(token);

		    URL = $("#UrlSite").val();
		    URL_Process = URL+"login/get_into/";
		    datos = $('#Form-Login').serialize();

		    const process__response = document.querySelectorAll('#Btn-Login');
		    process__response.forEach(element => {
		      element.innerHTML = `
		        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
		        <span class="sr-only">Loading...</span>
		      `;
		    });

		   	const btnPrincipal = document.querySelector('#Btn-Login');
		   	btnPrincipal.setAttribute('disabled', 'disabled');

			  $.ajax({
			    type: "POST",
			    url: URL_Process,
			    data: datos,
			    success: function(data){

		        let jsonData = JSON.parse(data);

		        if(jsonData.success == "1")
		        {

		          let Mensaje = `           
							  <div class="alert alert-info" role="alert">
							    <span class="h6 font-weight-light"> 
							    	Un momento, estamos preparando todo... 
							    </span>
							  </div>
		          `;

		          $("#Server-Reponse").html(Mensaje);

             	window.location.replace( URL+'desk/');

		        }

		        if(jsonData.error == "1")
		        {

		          let Mensaje = `           
						    <div class="alert alert-warning" role="alert">
						    	<span class="h6 font-weight-light"> 
						    		<i class="bi bi-exclamation-triangle"></i> 
						    		Todos los campos son obligatorios, si el problema persiste recarga el sitio web y vuelve a intentarlo. 
						    	</span>
						    </div>
		          `;

		          $("#Server-Reponse").html(Mensaje);

		        }

		       	if(jsonData.error == "2")
		       	{

			        let Mensaje = `           
								<div class="alert alert-danger" role="alert">
								  <span class="h6 font-weight-light"> 
								  	<i class="bi bi-x-octagon"></i> 
								  	¡Oops! Al parecer tu usuario o contraseña son incorrectos. 
								  </span>
								</div>
			        `;

			        $("#Server-Reponse").html(Mensaje);
			        
		       	}

		       	if(jsonData.error == "3")
		       	{

			        let Mensaje = `           
								<div class="alert alert-danger" role="alert">
						    	<span class="h6 font-weight-light"> 
						    		<i class="bi bi-exclamation-triangle"></i> 
						    		¡Oops! No logramos iniciar sesión, si el problema persiste recarga el sitio web y vuelve a intentarlo. 
						    	</span>
								</div>
			        `;

			        $("#Server-Reponse").html(Mensaje);

		       	}

			      process__response.forEach(element => {
			        element.innerHTML = `
			          Iniciar sesión
			        `;
			      });

			      btnPrincipal.removeAttribute('disabled', 'disabled');

			    },error: function(){

		        let Mensaje = `           
						  <div class="alert alert-danger" role="alert">
						    <span class="h6 font-weight-light"> 
						    	<i class="bi bi-x-octagon"></i> 
						    	Algo salió mal, recarga el sitio web y vuelve a intentarlo. 
						    </span>
						  </div>
		        `;

		        $("#Server-Reponse").html(Mensaje);

		        process__response.forEach(element => {
		          element.innerHTML = `
		            Iniciar sesión
		          `;
		        });

		        btnPrincipal.removeAttribute('disabled', 'disabled');

			    }
			  });

	    });
	  });
          
  });     
});      