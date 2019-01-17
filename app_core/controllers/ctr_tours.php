<?php
	
	require_once(__MDL_PATH . "mdl_tours.php");
	class ctr_tours{
		private $data;
		private $destiny;

		public function __construct() //CONSTRUCTOR
		{
			$this->data = new mdl_tours();
		}
		public function obtener_tours($nombre)
		{
			return $this->data->obtener_tours($nombre);
		}

		public function div_agregarInfo2(){
			$destiny = new mdl_tours();

		if ($_POST['btn_guardarInfo2']) {

					$numero=$_POST["checkdestino"];
					   $count = count($numero);
					   if($count>1){
					   	for ($i = 0; $i < $count; $i++) {
					       $destiny->insertarTours($_POST['txt_tour'],$_POST['txt_des'],$_POST['txt_tour'].".jpg",$numero[$i]);
					   		}
					  	}else{

					$destiny->insertarTours($_POST['txt_tour'],$_POST['txt_des'],$_POST['txt_tour'].".jpg",$numero[0]);
					}

				if ($_FILES['file2']['type'] == "image/jpeg" || $_FILES['file2']['type'] == "image/png"|| $_FILES['file2']['type'] == "image/jpg" || $_FILES['file2']['type'] == "image/gif"  ) {

                		if ($_FILES['file2']['size'] <= 2000000) {
                    		copy($_FILES['file2']['tmp_name'], "app_core/resources/dias/".$_POST['txt_tour'].".jpg");    
                    		
                		}
                	
            	}else{ 
                	   echo "<script>alert('error')</script>";      
            	}
			 }
		}
		
	}

?>