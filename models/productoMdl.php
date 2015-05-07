<?php
	class ProductoMdl {
		private $conexion;
		function __construct(){
			//echo file_get_contents("datos.json",true);
		}
		function agregar($imagen, $producto, $id_producto, $descripcion, $precio) {
			$producto_array = array('imagen' => $imagen,'producto' => $producto,'id_producto' => $id_producto,'descripcion' => $descripcion,'imagen' => $precio, );
			var_dump($producto_array);
			$json_ = json_encode($producto_array);
			$file = 'productos.json';
			file_put_contents($file, $json_);
		}
		function listar() {
			$productos = file_get_contents('productos.json');
			$json_ = json_decode($productos, true);
			return $json_;
		}
		function consutar($id) {
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
			return $resultado;
		}
	}
?>