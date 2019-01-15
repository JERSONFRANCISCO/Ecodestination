<?php 

	require_once(__MDL_PATH ."mdl_destino.php"); 
	
	
	class ctr_destino {

		private $destiny;



		public function div_agregarInfo(){
			$destiny = new mdl_destino();

		if ($_POST['btn_guardarInfo']) {
					$destiny->insertarDestino($_POST['txt_destino'],$_POST['txt_descripcion'],$_POST['txt_destino'].".jpg",$_POST['txt_destino'].".png");

				if ($_FILES['fotografia']['type'] == "image/jpeg" || $_FILES['fotografia']['type'] == "image/png"|| $_FILES['fotografia']['type'] == "image/jpg"  ) {

					if ($_FILES['logo']['type'] == "image/jpeg" || $_FILES['logo']['type'] == "image/png"|| $_FILES['logo']['type'] == "image/jpg"  ) {

                		if ($_FILES['fotografia']['size'] <= 2000000 && $_FILES['logo']['size'] <= 2000000) {
                    		copy($_FILES['fotografia']['tmp_name'], "app_core/resources/destinos/".$_POST['txt_destino'].".jpg");    
                    		copy($_FILES['logo']['tmp_name'], "app_core/resources/destinos/".$_POST['txt_destino'].".png");       
                		}

                	}
            	}else{ 
                	   echo "<script>alert('error')</script>";      
            	}
			 }
		}
 }
 ?>