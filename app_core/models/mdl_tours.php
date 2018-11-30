<?php
   require_once(__MDL_PATH . "mdl_conexion.php");


   class mdl_tours{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
  	  	public function obtener_tours($nombre){
		$this->conexion->consulta("SELECT tdestinos.nombre,tbtours.idtbl_tours,tbtours.titulo,tbtours.descripcion,tbtours.img 
			from tbl_destinos tdestinos , tbl_tours_has_destinos thdestinos , tbl_tours tbtours
			where tdestinos.idtbl_destinos = '".$nombre."'
			and tdestinos.idtbl_destinos = thdestinos.tbl_destinos_idtbl_destinos
			and thdestinos.tbl_tours_idtbl_tours = tbtours.idtbl_tours");
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