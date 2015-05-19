<?php
	require_once('estandarCtrl.php');

	class CarritoCtrl extends estandarCtrl {
		private $model;

		function __construct() {
			parent::__construct();
			require_once('./models/carritoMdl.php');
			$this->model = new carritoMdl();
		}

		public function ejecutar() {
			if (isset($_GET['act'])) {
				$accion = $_GET['act'];

				switch ($accion) {
					case 'mostrar':
						$this -> mostrar();					
						break;
					default:
						http_response_code(404);
						break;
				}
			} else {
				$this -> mostrar();
			}
		}

		public function mostrar() {

			$resultado = $this -> model -> listar(); 

			//var_dump($resultado);

			$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/carrito.html");
			$pie = file_get_contents("views/pie.html");


			$inicio = strrpos($vista,'<!-- empieza -->');
			$final = strrpos($vista,'<!-- termina -->') + 17;

			$tarjeta = substr($vista,$inicio,$final-$inicio);

			$lista = '';
			foreach ($resultado as $item) {

			    $tarjetita = $tarjeta;

			    $diccionario = array(
					'{titulo}' => $item['titulo'], 
					'{descripcion}' => $item['descripcion'],
					'{precio}' => $item['precio'], 
					'{imagen}' => $item['imagen'],
					'{enlace}' => "?ctrl=item&act=consultar&id=".$item['codigo']
				);

				$tarjetita = strtr($tarjeta,$diccionario);
				$lista .= $tarjetita;
			}

			$vista = str_replace($tarjeta, $lista, $vista);
			echo $encabezado.$vista.$pie;
		}
		
		
	}
?>