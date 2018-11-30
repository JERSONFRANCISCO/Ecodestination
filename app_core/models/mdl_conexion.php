<?php
	class mdl_Conexion
	{
		private $servidor;
		private $usuario;
		private $clave;
		private $base_datos;
		private $conexion;
		private $resultado;

		function __construct()
		{
			$this->servidor = "192.168.0.115";
			$this->usuario = "jordan";
			$this->clave = "jordan";
			$this->base_datos = "bd_tourpage";
			$this->conectar_base_datos();

			//$this->servidor = "localhost";
			//$this->usuario = "id7463930_usuario1";
			//$this->clave = "Jfhj3030_";
			//$this->base_datos = "id7463930_bd_sitio";
			//$this->conectar_base_datos();

		}

		private function conectar_base_datos()
		{
			$this->conexion = mysqli_connect($this->servidor,$this->usuario,$this->clave);
			mysqli_select_db($this->conexion, $this->base_datos) or die (mysqli_error($this->conexion));
            mysqli_query ($this->conexion, "SET NAMES 'utf8'");

            return $this->conexion;
		}

		public function consulta($consulta)
		{
			$this->resultado = mysqli_query($this->conexion, $consulta);

			echo mysqli_error($this->conexion);
		}

		public function extraer_registro ()
		{
			if ($fila = mysqli_fetch_row($this->resultado)){
				return $fila;
			} else {
				return false;
			}

			echo mysqli_error($this->conexion);
		}
	}
?>
