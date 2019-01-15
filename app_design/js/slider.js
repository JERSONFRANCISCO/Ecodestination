

 function openVentana(){
      

          $('.ventana').slideDown('slow');

  }
  function openVentana2(){
      

          $('.ventana2').slideDown('slow');
  }
  function openVentana3(){
      

          $('.ventana3').slideDown('slow');
  }
 function closeVentana(){
          $('.ventana').slideUp('slow');
          $('.ventana2').slideUp('slow');
          $('.ventana3').slideUp('slow');
          $('.itinerario').slideUp('slow');
           }	


 function mostrar2(){

 }
 function mostrar(){
  var archivo = document.getElementById("fotografia").files[0];
  var archivo2 = document.getElementById("logo").files[0];
  var reader = new FileReader();
  var reader2 = new FileReader();
  if (fotografia) {
    reader.readAsDataURL(archivo );
    reader.onloadend = function () {
      document.getElementById("img").src = reader.result;
    }
  }

  if (logo) {
    reader2.readAsDataURL(archivo2 );
    reader2.onloadend = function () {
      document.getElementById("log").src = reader2.result;
    }
  }
}

function cargarDestinoAjax(){

	 $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

        data: { key: 'buscar', des: document.getElementById('destino').value }

        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML
              $("#miconte").html(datos);

        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al ingresar");
        });    
}

