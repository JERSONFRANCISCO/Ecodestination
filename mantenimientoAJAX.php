<?php session_name("MYAPP"); session_start();

require 'app_core/models/mdl_inicio.php';
require 'app_core/controllers/ctr_destino.php';
	
	 function insertarUsuarios($des2){
	 				  $caja_reporte="";
	 				  $a=1;           

                           for ($i=0; $i < $des2 ; $i++) { 
                             $caja_reporte .= " 

                           <div style='float:left; font-size:14px;'>
                            Día ".$a."<br>
                            
                            Titulo:<br>
                             <input type='text' name='firstname' class='btn btn-outline-dark' style=' width: 300px;'><br>
                             Descripción:<br>
                             <textarea rows='4' cols='22' class='btn btn-outline-dark' style=' width: 300px;'>
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



    }
?>