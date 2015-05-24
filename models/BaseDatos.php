<?php

	//require_once('datos.inc');

	class BaseDatos {
		private $coneccion;
		public static $instancia; 
		private $servidor = 'localhost';
		private $usuario = 'root';
		private $contrasena = 'root';
		private $base_datos = 'spa';
		private $_query;
		private $resultado = array();
		private $contador = 0;

		public static function obtenerInstancia() {
			if(!self::$instancia) { 
				self::$instancia = new BaseDatos();
			}
			return self::$instancia;
		}

		private function __construct() {
			$this -> conectar();
		}

		private function conectar() {
			$this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->base_datos);
			if($this -> conexion -> connect_error) {
				die($this -> conexion -> connect_error);
			}
		}

		private function desconectar() {

		}

		private function clonar() {
			trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
		}

		// Get mysqli connection
		public function obtenerConexion() {
			return $this->conexion;
		}

		public function ejecutar($instruccion) {
			if($this->_query = $this->conexion ->query($instruccion)) {
				while($fila = $this->_query -> fetch_object()) {
					$this -> resultado[] = $fila;
				}
				$this -> contador = $this->_query -> num_rows;
			}
			return $this;
		}

		public function obtenerResultado() {
			return $this -> resultado;
		}

		public function contar() {
			return $this -> contador;
		}
	}
?>