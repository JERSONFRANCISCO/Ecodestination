<?php
   require_once 'mdl_conexion.php';


   class mdl_destino{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
  	  	public function insertarDestino($destino,$descripcion,$img,$logo){

  	  		$this->conexion->consulta("SELECT idtbl_destinos, nombre, descripcion, img, logo FROM tbl_destinos WHERE nombre = '".$destino."'" );
		$posts=array();
		$cont=0;

		if ($this->conexion->extraer_registro()) {
			//echo "<script>alert('ya existe el dato')</script>";  
		}else{
		$this->conexion->consulta("INSERT INTO tbl_destinos(nombre, descripcion, img, logo) VALUES ('".$destino."','".$descripcion."','".$img."','".$logo."')"); 

		}

  	}
 }

?>