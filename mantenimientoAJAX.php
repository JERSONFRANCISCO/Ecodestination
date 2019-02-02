<?php session_name("MYAPP"); session_start();

require 'app_core/models/mdl_inicio.php';
require 'app_core/controllers/ctr_destino.php';
require 'app_core/models/mdl_tours.php';
require 'app_core/models/mdl_itinerario.php';

	 function insertarUsuarios($des2){
	 				  $caja_reporte="";
	 				  $a=1;           

                           for ($i=0; $i < $des2 ; $i++) { 
                             $caja_reporte .= " 

                           <div style='color:black; font-size:14px;'>
                            Día ".$a."<br>
                            
                            Titulo:<br>
                             <input type='text' name='txt_tit[]' id='txt_tit' class='btn btn-outline-dark' style=' width: 300px;'><br>
                             Descripción:<br>
                             <textarea rows='4' cols='22' name='txt_desc[]' id='txt_desc' class='btn btn-outline-dark' style=' width: 300px;'>
                             </textarea><br><br>
                             
                           </div> 

                          ";
                          $a++;
                           }

                			  echo $caja_reporte;
    }

 if (isset($_POST['key'])) {
		
        if ($_POST['key']=='buscar'){
                 //Parametros POST provenientes de AJAX
        	$des = $_POST['des'];
        	 
                $mdl_inicio = new mdl_inicio();
            	$mdl_inicio->obtener_unico_destino($des);
             }

        if ($_POST['key']=='buscar2'){
                 //Parametros POST provenientes de AJAX
        	$des2 = $_POST['des2'];
        	 
                insertarUsuarios($des2);
             }

        if ($_POST['key']=='cargarTour'){
                 //Parametros POST provenientes de AJAX
            $tour = $_POST['tour'];
             
                $mdl_tours = new mdl_tours();
                $mdl_tours->obtener_tours_combo($tour);
             }

        if ($_POST['key']=='cargarmiTour'){
                 //Parametros POST provenientes de AJAX
            $tourismo = $_POST['turismo'];
             
                $mdl_tours = new mdl_tours();
                $mdl_tours->mostrar_tours($tourismo);
             }

        if ($_POST['key']=='cargarcmbItinerario'){
                      //Parametros POST provenientes de AJAX
                 $toursiti = $_POST['toursiti'];
                  
                     $mdl_itinerario = new mdl_itinerario();
                     $mdl_itinerario->obtener_itinerario_combo($toursiti);
             }

        if ($_POST['key']=='cargarmiItinerario'){
                           //Parametros POST provenientes de AJAX
                      $idItinerario = $_POST['idItinerario'];
                       
                          $mdl_itinerario = new mdl_itinerario();
                          $mdl_itinerario->mostrar_itinerario($idItinerario);
        }


             

    }
?>