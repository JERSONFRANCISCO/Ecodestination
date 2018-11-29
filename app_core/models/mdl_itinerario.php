<?php
   require_once(__MDL_PATH . "mdl_conexion.php");


   class mdl_itinerario{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
  	  	public function obtener_itinerario($id){
		$this->conexion->consulta("SELECT * 
			from tbl_itinerario
			where tbl_tours_idtbl_tours = ".$id."");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //p_nombre
		    $posts[$cont][1] = $fila[1]; //P_categoria
		    $posts[$cont][2] = $fila[2]; //img
		    $posts[$cont][3] = $fila[3]; //fechaVencimiento
		    $posts[$cont][4] = $fila[4]; //fechaVencimiento
		    $cont++;
		}
		return $posts;
  	}
 }
?>