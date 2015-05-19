<?php
	require_once('estandarCtrl.php');

	class UsuarioCtrl extends estandarCtrl {
		private $model;

		function __construct() {
			parent::__construct();
			require_once('./models/usuarioMdl.php');
			$this->model = new UsuarioMdl();
		}

		public function ejecutar() {
			$accion = $_GET['act'];

			switch ($accion) {
				case 'registro':
					if(empty($_POST)) {
						$this -> mostrarVistaFormRegistro();
					} else {
						$this -> agregar();
					}
					break;
				case 'autenticar':
					if(isset($_POST['usuario_tel_correo']) && !empty($_POST['usuario_tel_correo'])) {
						$this -> confirmarCambioContrasenia();
					} else {
						$this -> restablecer();
					}
					break;
				case 'panel':
					$this -> mostrarPanel();
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
				case 'restablecer':
					$this -> restablecer();
				default:
					http_response_code(404);
					break;
			}
		}
		
		function agregar() {
			//$this->limpiarCadena();
			
			
		}

		function mostrarPanel() {
			$encabezado = file_get_contents("views/navegacion-panel.html");
			$vista = file_get_contents("views/panel-usuario.html");

			echo $encabezado.$vista;
		}

		function confirmarCambioContrasenia() {
			$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/confirmacion.html");
			$pie = file_get_contents("views/pie.html");

			echo $encabezado.$vista.$pie;
		}

		function mostrarVistaFormRegistro() {
    		$encabezado = file_get_contents("views/navegacion-panel.html");
			$vista = file_get_contents("views/registro.html");
			$pie = file_get_contents("views/pie.html");

			echo $encabezado.$vista.$pie;
		}

		function restablecer() {
    		$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/restablecer_contrasena.html");
			$pie = file_get_contents("views/pie.html");

			echo $encabezado.$vista.$pie;
		}
	}
?>