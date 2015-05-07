<?php
	require_once('estandarCtrl.php');

	class TratamientoCtrl extends estandarCtrl {
		private $model;

		function __construct() {
			parent::__construct();
			require_once('./models/tratamientoMdl.php');
			$this->model = new TratamientoMdl();
		}

		public function ejecutar() {
			$accion = $_GET['act'];

			switch ($accion) {
				case 'agregar':
					break;
				case 'modificar_uno':
					#$this -> modificar();
					break;
				case 'consultar':
					$this -> consultar();
					break;
				case 'listar':
					$this -> listar();
					break;
				case 'eliminar':
					#$this -> eliminar();
					break;
				
				default:
					http_response_code(404);
					break;
			}
		}
		
		function agregar() {
			
		}

		function listar() {
			$resultado = $this -> model -> listar(); 

			//var_dump($resultado);

			$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/tratamientos.html");
			$pie = file_get_contents("views/pie.html");

			$inicio = strrpos($vista,'<!-- empieza -->');
			$final = strrpos($vista,'<!-- termina -->') + 17;

			$tarjeta = substr($vista,$inicio,$final-$inicio);

			$lista = '';
			foreach ($resultado as $tratamiento) {

			    $tarjetita = $tarjeta;

			    $diccionario = array(
					'{tratamiento}' => $tratamiento['servicio'], 
					'{descripcion}' => $tratamiento['descripcion'],
					'{precio}' => $tratamiento['precio'], 
					'{imagen}' => $tratamiento['imagen'],
					'{enlace}' => "?ctrl=tratamiento&act=consultar&id=".$tratamiento['id_servicio']
				);

				$tarjetita = strtr($tarjeta,$diccionario);
				$lista .= $tarjetita;
			}

			$vista = str_replace($tarjeta, $lista, $vista);
			echo $encabezado.$vista.$pie;
		}

		function consultar() {
			if (isset($_GET['id']) && !empty($_GET['id'])) {
				$id = $_GET['id'];

				if (($this->esEntero($id))) {//is_int((int)$id)) { 

					$encabezado = file_get_contents("views/navegacion.html");
					$vista = file_get_contents("views/ver-tratamiento.html");
					$pie = file_get_contents("views/pie.html");

					$inicio = strrpos($vista,'<!-- empieza -->');
					$final = strrpos($vista,'<!-- termina -->') + 17;

					$pagina = substr($vista,$inicio,$final-$inicio);

					$tratamiento = $this -> model -> consutar($id);

					//var_dump($tratamiento);

					$datos = $pagina;
					$diccionario = array(
						'{tratamiento}' => $tratamiento['servicio'], 
						'{descripcion}' => $tratamiento['descripcion'],
						'{precio}' => $tratamiento['precio'], 
						'{imagen}' => $tratamiento['imagen'],
						'{duracion}' => $tratamiento['duracion']
					);

					$datos = strtr($pagina,$diccionario);

					$vista = str_replace($pagina, $datos, $vista);
					echo $encabezado.$vista.$pie;
				}	
			} else {
				http_response_code(404);
			}
		}

		function modificar() {

		}
	}
?>