<?php
	class aparatologiaMdl {
		private $conexion;

		function __construct(){
			
		}

		function agregar() {
		}

		function listar() {
			$servicios = file_get_contents('aparatologia.json');
			$json_ = json_decode($servicios, true);

			return $json_;
		}

		function consutar($id) {
			$servicios = file_get_contents('aparatologia.json');
			$json_ = json_decode($servicios, true);
			$resultado = array();

			foreach ($json_ as $servicio) {
				//var_dump($tratamiento);
				//echo "<br>";
				//echo "<br>";
				if($servicio['id_servicio'] == $id) {
					//var_dump($tratamiento);
				$resultado = $servicio;
					
				break;
				}
			}
			return $resultado;
		}
	}

?>







