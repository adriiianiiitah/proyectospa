<?php
	require_once('estandarCtrl.php');

	class MasajeCtrl extends estandarCtrl {
		private $model;

		function __construct() {
			parent::__construct();
			require_once('./models/masajeMdl.php');
			$this->model = new MasajeMdl();
		}

		public function ejecutar() {
			$accion = $_GET['act'];

			switch ($accion) {
				case 'agregar':
					if(empty($_POST)) {
						require_once('./views/agregarMasaje.html');
					} else {
						$this -> agregar();
					}
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
			$vista = file_get_contents("views/masajes.html");
			$pie = file_get_contents("views/pie.html");

			$inicio = strrpos($vista,'<!-- empieza -->');
			$final = strrpos($vista,'<!-- termina -->') + 17;

			$tarjeta = substr($vista,$inicio,$final-$inicio);

			$lista = '';
			foreach ($resultado as $masaje) {

			    $tarjetita = $tarjeta;

			    $diccionario = array(
					'{masaje}' => $masaje['servicio'], 
					'{descripcion}' => $masaje['descripcion'],
					'{precio}' => $masaje['precio'], 
					'{imagen}' => $masaje['imagen'],
					'{enlace}' => "?ctrl=masaje&act=consultar&id=".$masaje['id_servicio']
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
					$vista = file_get_contents("views/ver-masaje.html");
					$pie = file_get_contents("views/pie.html");

					$inicio = strrpos($vista,'<!-- empieza -->');
					$final = strrpos($vista,'<!-- termina -->') + 17;

					$pagina = substr($vista,$inicio,$final-$inicio);

					$masaje = $this -> model -> consutar($id);

					//var_dump($masaje);

					$datos = $pagina;
					$diccionario = array(
						'{masaje}' => $masaje['servicio'], 
						'{descripcion}' => $masaje['descripcion'],
						'{precio}' => $masaje['precio'], 
						'{imagen}' => $masaje['imagen'],
						'{duracion}' => $masaje['duracion'],
						'{referencia-carrito}' => '?ctrl=carrito&act=mostrar'
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