<?php
   require_once 'mdl_conexion.php';



   class mdl_itinerario{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
  	  	public function obtener_itinerario($id){
		$this->conexion->consulta("SELECT tblIt.idtbl_itinerario,tblIt.tbl_tours_idtbl_tours,tblIt.descripcion,tblIt.titulo,tblIt.dia,tblTou.titulo 
								from tbl_itinerario tblIt, tbl_tours tblTou  where tblIt.tbl_tours_idtbl_tours = ".$id." and tblTou.idtbl_tours = tblIt.tbl_tours_idtbl_tours");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //p_nombre
		    $posts[$cont][1] = $fila[1]; //P_categoria
		    $posts[$cont][2] = $fila[2]; //img
		    $posts[$cont][3] = $fila[3]; //fechaVencimiento
		    $posts[$cont][4] = $fila[4]; //fechaVencimiento
		    $posts[$cont][5] = $fila[5]; //fechaVencimiento
		    $cont++;
		}
		return $posts;
  	}

  				public function obtener_itinerario_combo($tour){

  					$this->conexion->consulta("SELECT tbl_itinerario.* FROM tbl_itinerario WHERE tbl_itinerario.tbl_tours_idtbl_tours= ".$tour."" );
  					
  					$caja_reporte;
  					$caja_reporte = "<select name='miitinerario' id='miitinerario'  onchange='cargarItinerarioAjax()' >
  					 <option value=0> Seleccione dia</option>" ;

  					while ($fila = $this->conexion->extraer_registro()) {

  			    					$caja_reporte.= "
  	                                  <option value=".$fila[0]."> Día ".$fila[4]."</option>
  	                                  ";
  	                  }
  								
  	                                   $caja_reporte.=" </select> <br>";
  	                                
  									  //echo "<script>alert(".$caja_reporte.");</script>"; 
  	                                echo $caja_reporte;

  			    	}


  			    public function	mostrar_itinerario($idItinerario){

		    	$this->conexion->consulta("SELECT tbl_itinerario.idtbl_itinerario,tbl_itinerario.descripcion, tbl_itinerario.titulo, tbl_itinerario.dia FROM tbl_itinerario WHERE idtbl_itinerario = ".$idItinerario."" );
		    	

		    	$caja_reporte;

			while ($fila = $this->conexion->extraer_registro()) {

		          $caja_reporte ="
		          			<h2 style='color:black;'>Editar Itinerario</h2>
		          			<div style='color:black; font-size:14px;'>
                            Día ".$fila[3]."<br>
                            
                            Titulo:<br>
                             <textarea rows='4' cols='22' name='txt_desc[]' id='txt_desc' class='btn btn-outline-dark' style=' width: 300px;'>
                             ".$fila[2]."
                             </textarea><br><br>

                             Descripción:<br>
                             <textarea rows='4' cols='22' name='txt_desc[]' id='txt_desc' class='btn btn-outline-dark' style=' width: 300px;'>
                             ".$fila[1]."
                             </textarea><br><br>
                             
                           </div> 
                          ";
			} 

			  echo $caja_reporte;

		 }
 }
?>