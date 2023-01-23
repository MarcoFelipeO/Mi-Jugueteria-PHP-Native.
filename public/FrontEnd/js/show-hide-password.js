$(document).ready(function(){
    $('#Eye-Password').click(function(){

      let tipo = $('#Password-Login').get(0).type;

      if(tipo == 'password'){
        tipo = $('#Password-Login').get(0).type = 'text';
        const process__response = document.querySelectorAll('#Eye-Password');
        process__response.forEach(element => {
            element.innerHTML = `
              <i class="bi bi-eye-slash" id="hide_eye"></i>
            `;
        });
      }else{
        tipo = $('#Password-Login').get(0).type = 'password';
        const process__response = document.querySelectorAll('#Eye-Password');
        process__response.forEach(element => {
            element.innerHTML = `
              <i class="bi bi-eye" id="show_eye"></i>
            `;
        });
      }

    });
});