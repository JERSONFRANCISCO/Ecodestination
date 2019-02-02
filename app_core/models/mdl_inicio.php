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

		          $caja_reporte =" 
		          				  <form style='color: black;' enctype='multipart/form-data' method='post'>
		          				  <h2 style='color:black;'>Editar Destino</h2>
		          				  <img src='app_core/resources/destinos/".$fila[3]."' id='img' style='height: 200px; width: 300px;' ><br>
		          				  <br>
		          				  <input type='file' name='fotografia' id='fotografia' required tabindex='2'onchange='mostrar3()'/><br>
		          				  Nombre Destino:<br>
		          				  <input type='text' name='txt_destino' id='txt_destino' value='".$fila[1]."' class='btn btn-outline-dark' style=' width: 300px;' required><br>
		          				  Detalle:<br>
		          				  <textarea rows='4' cols='22' name='txt_descripcion' id='txt_descripcion' class='btn btn-outline-dark' style=' width: 300px;' required> ".$fila[2]."
		          				  </textarea><br><br> Logo:<br>
		          				  <img src='app_core/resources/destinos/".$fila[4]."' id='log' style='height: 50px; width: 50px;'><br>
		          				  <input type='file' name='logo' id='logo' required tabindex='2'
		          				  onchange='mostrar()'/>
		          				  <br>
		          				  <input type='submit' id='btn_guardarInfo' value='Guardar Info' name='btn_guardarInfo' class='btn btn-outline-dark'><i class='fa fa-sign-out'></i> 
		          				</form>



		         <!-- <img src='app_core/resources/destinos/".$fila[3]."' style='height: 200px; width: 300px;'><br>
                          <br>
                          
                          Nombre Destino:<br>
                          <input type='text' name='firstname'  value='".$fila[1]."'  class='btn btn-outline-dark' style=' width: 300px; '><br>
                          Detalle:<br>
                          <textarea rows='4' cols='22'  class='btn btn-outline-dark' style=' width: 300px;'>".$fila[2]."
                          </textarea><br><br>
                          <button type='button' class='btn btn-outline-dark' onclick='openTours();'><i class='fa fa-sign-out'></i> Agregar tours</button> -->
                          ";


				$num_fila++;
			} 

			  echo $caja_reporte;
  	}
 }
?>