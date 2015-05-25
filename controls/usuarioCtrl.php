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
				case 'iniciar_sesion':
					$this -> iniciarSesion();
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
			$telefonos = array();
			print_r($_POST);
			var_dump($_FILES);
			if(isset($_POST['nombre']) 	&& isset($_POST['apellidos']) 	&& isset($_POST['usuario']) 
			&& isset($_POST['email']) 	&& isset($_POST['contrasena']) 	&& isset($_POST['domicilio']) 
			&& isset($_POST['colonia']) && isset($_POST['municipio']) 	&& isset($_POST['codigo_postal'])
			&& isset($_POST['telefono'])&& isset($_POST['contrasena'])) {
				$nombre 		= $this->limpiarCadena($_POST['nombre']);
				$apellidos 		= $this->limpiarCadena($_POST['apellidos']);
				$usuario 		= $this->limpiarCadena($_POST['usuario']);
				$email 			= $this->limpiarCadena($_POST['email']);
				$contrasena 	= $this->limpiarCadena($_POST['contrasena']);
				$contrasena2	= $this->limpiarCadena($_POST['contrasena2']);
				$domicilio 		= $this->limpiarCadena($_POST['domicilio']);
				$colonia 		= $this->limpiarCadena($_POST['colonia']);
				$municipio 		= $this->limpiarCadena($_POST['municipio']);
				$codigo_postal 	= $this->limpiarCadena($_POST['codigo_postal']);
				
				$telefonos = array_push($this->limpiarCadena($_POST['telefono']));

				if(isset($_POST['telefono1'])) {
					$telefonos = array_push($this->limpiarCadena($_POST['telefono1']));
				}

				if(isset($_POST['telefono2'])) {
					$telefonos = array_push($this->limpiarCadena($_POST['telefono2']));
				}

				if(isset($_POST['telefono3'])) {
					$telefonos = array_push($this->limpiarCadena($_POST['telefono3']));
				}

				if(isset($_POST['telefono4'])) {
					$telefonos = array_push($this->limpiarCadena($_POST['telefono4']));
				}

				if(isset($_POST['telefono3'])) {
					$telefonos = array_push($this->limpiarCadena($_POST['telefono3']));
				}

				$telefonos = implode(',', $telefonos);

				if(isset($_FILES['foto']) && !empty($_FILES)) {
					$imagen = $_FILES['name'];
					$temporal = $_FILES['tmp_name'];
					$generado = 
				}
			}
		}

		function iniciarSesion() {
			if(isset($_POST['usuario']) && isset($_POST['contrasena'])) {
				$usuario = $this->limpiarCadena($_POST['usuario']);
				$contrasena = $this->limpiarCadena($_POST['contrasena']);
				$contrasena = $this->encriptar($contrasena);

				$this -> model -> login($usuario,$contrasena);
			}
		}

		function mostrarPanel() {
			$encabezado = file_get_contents("views/navegacion-panel.html");
			$vista = file_get_contents("views/panel-usuario.html");

			echo $encabezado.$vista;
		}

		function confirmarCambioContrasenia() {
			$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/confirmacion.html");
			$pie = $this->pie();

			echo $encabezado.$vista.$pie;
		}

		function mostrarVistaFormRegistro() {
    		$encabezado = file_get_contents("views/navegacion-panel.html");
			$vista = file_get_contents("views/registro.html");
			$pie = $this->pie();

			echo $encabezado.$vista.$pie;
		}

		function restablecer() {
    		$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/restablecer_contrasena.html");
			$pie = $this->pie();

			echo $encabezado.$vista.$pie;
		}
	}
?>