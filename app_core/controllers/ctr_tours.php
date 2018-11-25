<?php
	
	require_once(__MDL_PATH . "mdl_tours.php");
	class ctr_tours{
		private $postdata;

		public function __construct() //CONSTRUCTOR
		{
			$this->postdata = new mdl_tours();
		}
		public function obtener_tours($nombre)
		{
			return $this->postdata->obtener_tours($nombre);
		}
		
	}

?>