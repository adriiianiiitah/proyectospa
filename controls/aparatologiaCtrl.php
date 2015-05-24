<?php
	require_once('estandarCtrl.php');

	class AparatologiaCtrl extends estandarCtrl {
		private $model;

		function __construct() {
			parent::__construct();
			require_once('./models/aparatologiaMdl.php');
			$this->model = new aparatologiaMdl();
		}

		public function ejecutar() {
			if (isset($_GET['act'])) {
				$accion = $_GET['act'];

				switch ($accion) {
					case '':
						$this -> mostrar();					
						break;
					default:
						http_response_code(404);
						break;
				}
			}
		}

		public function mostrar() {
			$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/aparatologia.html");
			$pie = file_get_contents("views/pie.html");

			$resultado = $this -> model -> listar(); 
			
			$inicio = strrpos($vista,'<!--comienza-fila -->');
			$fin = strrpos($vista,'<!--termina-fila -->') + 20;

			$fila = substr($vista,$inicio,$fin-$inicio);
			$tabla = "";

			foreach ($resultado as $servicio) {
				$nueva_fila = $fila;

				$diccionario = array(
					'{area}' => $servicio ['area'],//$número, 2, '.', ''
					'{precio-paquete}' => $servicio ['precio-paquete'],
					'{precio-descuento}' => $servicio ['precio-descuento'],
					'{precio-sesion}' => $servicio ['precio-sesion'],
					'{referencia-carrito}' => '?ctrl=carrito&act=mostrar'
				);

				$nueva_fila = strtr($nueva_fila,$diccionario);
				$tabla .= $nueva_fila;
			}

			$vista = str_replace($fila, $tabla, $vista);

			echo $encabezado.$vista.$pie;
		}
		
		
	}
?>