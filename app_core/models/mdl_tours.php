<?php
require_once 'mdl_conexion.php';


class mdl_tours{

	private $conexion;

	public function __construct(){
		$this->conexion = new mdl_Conexion();	   
	} 	

	public function obtener_descripcionTour($id){
		$this->conexion->consulta("SELECT `descripcion` from tbl_destinos where idtbl_destinos = '".$id."'");
		$posts=array();
		$cont=0;
		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //p_nombre
		    $cont++;
		}
		return $posts;
	}
	public function obtener_tours($id){
		$this->conexion->consulta("SELECT tdestinos.nombre,tbtours.idtbl_tours,tbtours.titulo,tbtours.descripcion,tbtours.img 
			from tbl_destinos tdestinos , tbl_tours_has_destinos thdestinos , tbl_tours tbtours
			where tdestinos.idtbl_destinos = '".$id."'
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

	public function insertarTours($titulo,$descripcion,$img,$destino){

		$this->conexion->consulta("SELECT idtbl_tours, titulo, descripcion, img FROM tbl_tours WHERE titulo = '".$titulo."'" );

		$posts=array();
		$cont=0;

		if ($this->conexion->extraer_registro()) {

			$this->conexion->consulta("SELECT idtbl_tours FROM tbl_tours order by idtbl_tours desc limit 1");
			$a="";
			while ($fila = $this->conexion->extraer_registro()) {
		    					$a = $fila[0]; //p_nombre
		    				}

		    				$this->conexion->consulta("SELECT id_tbl_tours_has_destinos, tbl_tours_idtbl_tours, tbl_destinos_idtbl_destinos FROM tbl_tours_has_destinos WHERE tbl_tours_idtbl_tours=".$a." && tbl_destinos_idtbl_destinos= ".$destino." " );

		    				if ($this->conexion->extraer_registro()) {

		    					echo "<script>alert('ya existe este tour!!')</script>";  

		    				}else{
		    					$this->conexion->consulta("INSERT INTO tbl_tours_has_destinos(tbl_tours_idtbl_tours, tbl_destinos_idtbl_destinos) VALUES (".$a.",".$destino.")");
		    					echo "<script>alert('ingreso tbl_tours_has_destinos!!')</script>";  
		    				}

		    			}else{
		    				$this->conexion->consulta("INSERT INTO tbl_tours(titulo, descripcion, img) VALUES ('".$titulo."','".$descripcion."','".$img."')");

		    				$this->insertarTourshasDestino($destino);

		    			}

		    		}

		    		public function insertarTourshasDestino($destino){

		    			$this->conexion->consulta("SELECT idtbl_tours FROM tbl_tours order by idtbl_tours desc limit 1");
		    			$a="";
		    			while ($fila = $this->conexion->extraer_registro()) {
		    $a = $fila[0]; //p_nombre

		}
		$this->conexion->consulta("INSERT INTO tbl_tours_has_destinos(tbl_tours_idtbl_tours, tbl_destinos_idtbl_destinos) VALUES (".$a.",".$destino.")");

	}

	public function insertarItinerario($descrip,$titu,$dia){

		$this->conexion->consulta("SELECT idtbl_tours FROM tbl_tours order by idtbl_tours desc limit 1");
		$a="";
		while ($fila = $this->conexion->extraer_registro()) {
		    $a = $fila[0]; //p_nombre

		}

		$this->conexion->consulta("INSERT INTO tbl_itinerario( tbl_tours_idtbl_tours, descripcion, titulo, dia) VALUES (".$a.",'".$descrip."','".$titu."',".$dia.")");
	}



	public function obtener_tours_combo($destino){

		$this->conexion->consulta("SELECT tbl_tours.idtbl_tours, tbl_tours.titulo FROM tbl_tours , tbl_tours_has_destinos WHERE tbl_tours.idtbl_tours = tbl_tours_has_destinos.tbl_tours_idtbl_tours && tbl_tours_has_destinos.tbl_destinos_idtbl_destinos = ".$destino." " );

		$caja_reporte;
		$caja_reporte = "<select name='turismo' id='turismo'  onchange='cargarTourAjax(); cargarComboItinerario();' >
		<option value=0> Seleccione un Tour</option>" ;

		while ($fila = $this->conexion->extraer_registro()) {

			$caja_reporte.= "
			<option value=".$fila[0]."> ".$fila[1]."</option>
			";
		}

		$caja_reporte.=" </select> <br>";

								  //echo "<script>alert(".$caja_reporte.");</script>"; 
		echo $caja_reporte;

	}

	public function	mostrar_tours($tourismo){

		$this->conexion->consulta("SELECT idtbl_tours, titulo, descripcion, img FROM tbl_tours WHERE idtbl_tours = ".$tourismo."" );


		$caja_reporte;

		while ($fila = $this->conexion->extraer_registro()) {

			$caja_reporte =" 
			<form style='color: black;' enctype='multipart/form-data' method='post'>
			<h2 style='color:black;'>Editar Destino</h2>
			<img src='app_core/resources/dias/".$fila[3]."' id='img' style='height: 200px; width: 300px;' ><br>
			<br>
			<input type='file' name='fotografia' id='fotografia' required tabindex='2'onchange='mostrar3()'/><br>
			Nombre Destino:<br>
			<input type='text' name='txt_destino' id='txt_destino' value='".$fila[1]."' class='btn btn-outline-dark' style=' width: 300px;' required><br>
			Detalle:<br>
			<textarea rows='4' cols='22' name='txt_descripcion' id='txt_descripcion' class='btn btn-outline-dark' style=' width: 300px;' required> ".$fila[2]."
			</textarea><br>
			<input type='submit' id='btn_guardarInfo' value='Guardar Info' name='btn_guardarInfo' class='btn btn-outline-dark'><i class='fa fa-sign-out'></i> 
			</form>
			";
		} 

		echo $caja_reporte;

	}

}
?>