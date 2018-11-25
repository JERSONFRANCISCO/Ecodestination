<?php
	
	require_once(__MDL_PATH . "mdl_conexion.php");

	class mdl_Login{

		var $conexion;
		var $conn_status;
		var $username;
		var $userid;
		var $userphoto;

		function __construct(){
			$this->conexion=new mdl_Conexion();
		}

		function get_username(){
			return $this->username;
		}

		function get_userid(){
			return $this->userid;
		}

		function get_userphoto(){
			return $this->userphoto;
		}

		public function login($user, $pssw){
			$this->conexion->consulta("SELECT tbl_users.id,
											   tbl_users.usuario,
											   tbl_users.clave 
											   FROM tbl_users
											   WHERE usuario = '" . $user . "'
											   AND clave = '" . $pssw . "'");
			$fila = $this->conexion->extraer_registro();

			if(count($fila)>1){
				$this->conn_status=true;
				$this->userid=$fila[0];
				$this->username=$fila[1];
	
			}else{
				$this->conn_status=false;
			}
		}

		public function logout(){
			unset($this->conexion);
			$this->conn_status=false;
			unset($_SESSION['MYAPP']);
		}
	}

?>