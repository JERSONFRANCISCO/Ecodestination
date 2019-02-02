

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


var reader = new FileReader();
var reader2 = new FileReader();
var reader3 = new FileReader();
function mostrar2(){
  var archivo3 = document.getElementById("file2").files[0];
  reader.readAsDataURL(archivo3 );
   reader.onloadend = function () {
      document.getElementById("img2").src = reader.result;
    }
    }
    function mostrar3(){
      
      var archivo = document.getElementById("fotografia").files[0];
      reader2.readAsDataURL(archivo );;
       reader2.onloadend = function () {
      document.getElementById("img").src = reader2.result;
    }
  }
 function mostrar(){
  
  var archivo2 = document.getElementById("logo").files[0];
   reader3.readAsDataURL(archivo2 );
 
    reader3.onloadend = function () {
      document.getElementById("log").src = reader3.result;
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

function cargarItiAjaxAgregar(){

   $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

        data: { key: 'buscar2', des: document.getElementById('iti').value }

        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML

              $("#miconte2").html(datos);
              
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al ingresar");
        });    
}

function cargarTourComboBox(){
   $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

        data: { key: 'cargarTour', tour: document.getElementById('destino').value }

        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML
              $("#miconte3").html(datos);

        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al ingresar");
        });    
}

function cargarTourAjax(){

   $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

        data: { key: 'cargarmiTour', turismo: document.getElementById('turismo').value }

        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML

              $("#miconte4").html(datos);
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al ingresar");
        });    
}


function cargarComboItinerario(){

   $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

        data: { key: 'cargarcmbItinerario', toursiti: document.getElementById('turismo').value }

        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML

              $("#miconte5").html(datos);
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al ingresar");
        });    
}

function cargarItinerarioAjax(){

   $.ajax({
        type: 'POST', //tipo de paso de parametros
        url: 'mantenimientoAJAX.php', //Script PHP donde estan las peticiones
        //parametros POST y una key que usamos solo para saber que se hizo click examinandolo en el PHP

        data: { key: 'cargarmiItinerario', idItinerario: document.getElementById('miitinerario').value }

        }).done(function( datos ) {
            //Invocamos a cargarFuncionarios para refrescar la tabla HTML

              $("#miconte6").html(datos);
        }).fail(function (jqXHR, textStatus, errorThrow){
            //En caso de error de carga nos notifica
            alert("Error al ingresar");
        }); 
}


