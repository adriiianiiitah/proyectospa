<?php
	require_once('estandarMdl.php');
	require_once('BaseDatos.php');

	class ServicioMdl extends estandarMdl{
		private $conexion;

		function __construct(){
			parent::__construct();
			$this->conexion = BaseDatos::obtenerInstancia();
		}

		function agregar() {
		}

		function listar() {

			$consulta = 'SELECT * FROM servicios WHERE tipo LIKE "%estetica%"';
			$servicios = $this->conexion->ejecutar($consulta)->obtenerResultado();

			return $servicios;

		}

		function consutar($id) {

			$consulta = 'SELECT * FROM servicios WHERE tipo LIKE "%estetica%" AND codigo="'.$id.'"';
			$servicios = $this->conexion->ejecutar($consulta)->obtenerResultado()[0];

			return $servicios;
		}

	}

?>