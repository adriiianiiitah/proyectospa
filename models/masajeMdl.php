<?php
	class MasajeMdl {
		private $conexion;

		function __construct(){
			//echo file_get_contents("datos.json",true);
		}

		function agregar() {
		}

		function listar() {
			$servicios = file_get_contents('masajes.json');
			$json_ = json_decode($servicios, true);

			return $json_;

		}

		function consutar($id) {
			$servicios = file_get_contents('masajes.json');
			$json_ = json_decode($servicios, true);
			$resultado = array();

			foreach ($json_ as $servicio) {
				var_dump($servicio);
				//echo "<br>";
				//echo "<br>";
				if($servicio['id_servicio'] == $id) {
					//var_dump($producto);
				$resultado = $servicio;
					
				break;
				}
			}

			return $resultado;
		}
	}
?>
