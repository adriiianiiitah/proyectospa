<?php
	class TratamientoMdl {
		private $conexion;

		function __construct(){
			
		}

		function agregar() {
		}

		function listar() {
			$tratamientos = file_get_contents('tratamientos.json');
			$json_ = json_decode($tratamientos, true);

			return $json_;

		}

		function consutar($id) {
			$tratamientos = file_get_contents('tratamientos.json');
			$json_ = json_decode($tratamientos, true);
			$resultado = array();

			foreach ($json_ as $tratamiento) {
				//var_dump($tratamiento);
				//echo "<br>";
				//echo "<br>";
				if($tratamiento['id_servicio'] == $id) {
					//var_dump($tratamiento);
				$resultado = $tratamiento;
					
				break;
				}
			}

			return $resultado;

		}



	}

?>