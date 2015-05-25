<?php
	require_once('estandarMdl.php');
	require_once('BaseDatos.php');

	class UsuarioMdl extends estandarMdl{
		private $conexion;

		function __construct(){
			parent::__construct();
			$this->conexion = BaseDatos::obtenerInstancia();
		}

		function login($usuario, $contrasena) {
			$consulta = 'SELECT * FROM usuarios WHERE usuario ="'.$usuario.'" AND contrasena = "'.$contrasena.'" LIMIT 1';
			$usuarios = $this->conexion->ejecutar($consulta)->obtenerResultado();

			return $usuarios;
		}
	}
?>