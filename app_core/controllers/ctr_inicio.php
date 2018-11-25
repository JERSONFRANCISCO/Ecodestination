<?php
	
	require_once(__MDL_PATH . "mdl_inicio.php");
	class ctr_inicio{
		private $postdata;

		public function __construct() //CONSTRUCTOR
		{
			$this->postdata = new mdl_inicio();
		}
		public function obtener_servicios()
		{
			return $this->postdata->obtener_servicios();
		}
		public function obtener_tours()
		{
			return $this->postdata->obtener_tours();
		}
		public function obtener_destinos()
		{
			return $this->postdata->obtener_destinos();
		}
		
	}

?>