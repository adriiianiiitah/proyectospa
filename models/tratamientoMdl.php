<?php
	require_once('estandarMdl.php');
	require_once('BaseDatos.php');

	class TratamientoMdl extends estandarMdl{
		private $conexion;

		function __construct(){
			parent::__construct();
			$this->conexion = BaseDatos::obtenerInstancia();
		}

		function agregar() {
		}

		function listar() {

			$consulta = 'SELECT * FROM servicios WHERE tipo LIKE "%tratamiento%"';
			$tratamientos = $this->conexion->ejecutar($consulta)->obtenerResultado();

			return $tratamientos;

		}

		function consutar($id) {

			$consulta = 'SELECT * FROM servicios WHERE tipo LIKE "%tratamiento%" AND codigo="'.$id.'"';
			$tratamientos = $this->conexion->ejecutar($consulta)->obtenerResultado()[0];

			return $tratamientos;
		}

	}

?>