<?php
	
	require_once(__MDL_PATH . "mdl_itinerario.php");

	class ctr_itinerario{
		private $postdata;

		public function __construct() //CONSTRUCTOR
		{
			$this->postdata = new mdl_itinerario();
		}
		public function obtener_itinerario($id)
		{
			return $this->postdata->obtener_itinerario($id);
		}
		
	}

?>