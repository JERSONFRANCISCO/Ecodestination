<?php session_name("MYAPP"); session_start();

require 'app_core/models/mdl_inicio.php';

 if (isset($_POST['key'])) {
		
        if ($_POST['key']=='buscar'){
                 //Parametros POST provenientes de AJAX
        	$des = $_POST['des'];
        	 
                $mdl_inicio = new mdl_inicio();
            	$mdl_inicio->obtener_unico_destino($des);
             }

        
    }
?>