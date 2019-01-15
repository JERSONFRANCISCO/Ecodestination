<?php
   require_once 'mdl_conexion.php';


   class mdl_inicio{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
  	  	public function obtener_destinos(){
		$this->conexion->consulta("SELECT `nombre`,`descripcion`,`img`,`logo`,`idtbl_destinos` from tbl_destinos");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //p_nombre
		    $posts[$cont][1] = $fila[1]; //P_categoria
		    $posts[$cont][2] = $fila[2]; //img
		    $posts[$cont][3] = $fila[3]; //fechaVencimiento
		    $posts[$cont][4] = $fila[4]; //id
		    $cont++;
		}
		return $posts;
  	}


  	public function obtener_unico_destino($des){
  		$this->conexion->consulta("SELECT * FROM `tbl_destinos` WHERE tbl_destinos.idtbl_destinos
=".$des."");
        

          	$posts=array(); //matriz
			$num_fila=0;
			$caja_reporte;

			while ($fila = $this->conexion->extraer_registro()) {

		          $caja_reporte =" <img src='app_core/resources/destinos/".$fila[3]."' style='height: 200px; width: 300px;'><br>
                          <br>
                          
                          Nombre Destino:<br>
                          <input type='text' name='firstname'  value='".$fila[1]."'  class='btn btn-outline-dark' style=' width: 300px; '><br>
                          Detalle:<br>
                          <textarea rows='4' cols='22'  class='btn btn-outline-dark' style=' width: 300px;'>".$fila[2]."
                          </textarea><br><br>
                          <button type='button' class='btn btn-outline-dark' onclick='openTours();'><i class='fa fa-sign-out'></i> Agregar tours</button> 
                          ";


				$num_fila++;
			} 

			  echo $caja_reporte;
  	}
 }
?>