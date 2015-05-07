<?php
	require_once('estandarCtrl.php');

	class AparatologiaCtrl extends estandarCtrl {
		//private $model;

		function __construct() {
			parent::__construct();
			//require_once('./models/productoMdl.php');
			//$this->model = new ProductoMdl();
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

			echo $encabezado.$vista.$pie;
		}
		
		
	}
?>