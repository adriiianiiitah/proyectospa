<?php
	class carritoMdl {
		private $conexion;

		function __construct(){
			//echo file_get_contents("datos.json",true);
		}

		function listar() {
			$items = file_get_contents('compras.json');
			$json_ = json_decode($items, true);
			return $json_;
		}
		function consutar($id) {
			$items = file_get_contents('compras.json');
			$json_ = json_decode($items, true);
			$resultado = array();
			foreach ($json_ as $item) {
				//var_dump($item);
				//echo "<br>";
				//echo "<br>";
				if($item['codigo'] == $id) {
					//var_dump($item);
				$resultado = $item;
					
				break;
				}
			}
			return $resultado;
		}
	}
?>