

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
          $('.tour').slideUp('slow');
 }	



 function mostrar(){
  var archivo = document.getElementById("file").files[0];
  var reader = new FileReader();
  if (file) {
    reader.readAsDataURL(archivo );
    reader.onloadend = function () {
      document.getElementById("img").src = reader.result;
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
