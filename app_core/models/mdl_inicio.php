<?php
   require_once(__MDL_PATH . "mdl_conexion.php");


   class mdl_inicio{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
	public function obtener_servicios(){
		$this->conexion->consulta("SELECT titulo,descripcion,img
									FROM tbl_servicios 
									where estado = 'A' and (fechaVencimiento = '00/00/0000' OR fechaVencimiento >= CURDATE())
									order by id_tbl_servicios asc");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //titulo
		    $posts[$cont][1] = $fila[1]; //descripcion
		    $posts[$cont][2] = $fila[2]; //img
		    $cont++;
		}
		return $posts;
  	}
  	public function obtener_tours(){
  		$this->conexion->consulta("SET lc_time_names = 'es_ES';");
		$this->conexion->consulta("SELECT P_nombre,P_categoria,img,DATE_FORMAT(fechaVencimiento, '%d %M %Y'),fechaIngreso,g_subtitulo,g_descripcion,precio,id_tbl_tours
								   FROM tbl_tours 
								   where estado = 'A' and (fechaVencimiento = '00/00/0000' OR fechaVencimiento >= CURDATE())");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //p_nombre
		    $posts[$cont][1] = $fila[1]; //P_categoria
		    $posts[$cont][2] = $fila[2]; //img
		    $posts[$cont][3] = $fila[3]; //fechaVencimiento
		    $posts[$cont][4] = $fila[4]; //fechaIngreso
		    $posts[$cont][5] = $fila[5]; //g_subtitulo
		    $posts[$cont][6] = $fila[6]; //g_descripcion
		    $posts[$cont][7] = $fila[7]; //precio
		    $posts[$cont][8] = $fila[8]; //ID
		    $cont++;
		}
		return $posts;
  	}
  	  	public function obtener_destinos(){
		$this->conexion->consulta("SELECT `nombre`,`descripcion`,`img`,`logo` from tbl_destinos");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //p_nombre
		    $posts[$cont][1] = $fila[1]; //P_categoria
		    $posts[$cont][2] = $fila[2]; //img
		    $posts[$cont][3] = $fila[3]; //fechaVencimiento
		    $cont++;
		}
		return $posts;
  	}
 }
?>