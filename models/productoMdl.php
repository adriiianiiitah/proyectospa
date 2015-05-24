<?php
	require_once('estandarMdl.php');
	require_once('BaseDatos.php');

	class ProductoMdl extends estandarMdl {
		public $conexion;

		function __construct(){
			parent::__construct();
			$this->conexion = BaseDatos::obtenerInstancia();
		}

		function agregar($producto, $descripcion, $precio, $categoria, $marca, $imagen) {

			$query = "INSERT INTO productos (producto,categoria,marca,descripcion,precio,imagen) VALUES('".$categoria."','".$producto."','".$marca."','".$descripcion."','".$precio."','".$imagen."')";
			$resultado = $this->conexion->ejecutar($query);

		}

		function listar() {

			$consulta = 'SELECT * FROM productos';
			$productos = $this->conexion->ejecutar($consulta)->obtenerResultado();

			return $productos;

		}

		function consutar($id) {

			$consulta = 'SELECT * FROM productos WHERE codigo="'.$id.'"';
			$productos = $this->conexion->ejecutar($consulta)->obtenerResultado();

			return $productos[0];
		}
	}
?>