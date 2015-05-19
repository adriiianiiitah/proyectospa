<?php
	class UsuarioMdl {
		private $conexion;
		function __construct(){
			//echo file_get_contents("datos.json",true);
		}

		function listar() {/*
			$productos = file_get_contents('productos.json');
			$json_ = json_decode($productos, true);
			return $json_;*/
		}
		function consutar($id) {/*
			$productos = file_get_contents('productos.json');
			$json_ = json_decode($productos, true);
			$resultado = array();
			foreach ($json_ as $producto) {
				//var_dump($producto);
				//echo "<br>";
				//echo "<br>";
				if($producto['codigo'] == $id) {
					//var_dump($producto);
				$resultado = $producto;
					
				break;
				}
			}
			return $resultado;*/
		}
	}
?>