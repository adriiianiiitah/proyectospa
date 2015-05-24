<?php
	require_once('estandarMdl.php');
	require_once('BaseDatos.php');

	class MasajeMdl extends estandarMdl{
		private $conexion;

		function __construct(){
			parent::__construct();
			$this->conexion = BaseDatos::obtenerInstancia();
		}

		function agregar() {
			
		}

		function listar() {

			$consulta = 'SELECT * FROM servicios WHERE tipo LIKE "%masaje%"';
			$masajes = $this->conexion->ejecutar($consulta)->obtenerResultado();

			return $masajes;

		}

		function consutar($id) {

			$consulta = 'SELECT * FROM servicios WHERE tipo LIKE "%masaje%" AND codigo="'.$id.'"';
			$masajes = $this->conexion->ejecutar($consulta)->obtenerResultado()[0];

			return $masajes;
		}
	}
?>
