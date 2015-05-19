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
						//require_once('./views/registroProducto.html');
						$this -> mostrarVistaFormRegistro();
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
			$imagen = $_POST['imagen'];
			$producto = $_POST['producto'];
			$id_producto = $_POST['id_producto'];
			$descripcion = $_POST['descripcion'];
			$precio = $_POST['precio'];

			$resultado = $this -> model -> agregar($imagen, $producto, $id_producto, $descripcion, $precio);
			
		}

		function esProductoValido() {

		}

		function consultar() {
			if (isset($_GET['usuario']) && !empty($_GET['contrasena'])) {
				$usuario = $_GET['usuario'];
				$contrasena = $_GET['contrasena'];

				if (($this->esEntero($id))) {//is_int((int)$id)) { 

					$encabezado = file_get_contents("views/navegacion.html");
					$vista = file_get_contents("views/ver-producto.html");
					$pie = file_get_contents("views/pie.html");

					$inicio = strrpos($vista,'<!-- empieza -->');
					$final = strrpos($vista,'<!-- termina -->') + 17;

					$pagina = substr($vista,$inicio,$final-$inicio);

					$producto = $this -> model -> consutar($id);

					$datos = $pagina;
					$diccionario = array(
						'{producto}' => $producto['producto'], 
						'{descripcion}' => $producto['descripcion'],
						'{precio}' => $producto['precio'], 
						'{imagen}' => $producto['imagen'],
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

		function mostrarVistaFormRegistro() {
    		$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/registro.html");
			$pie = file_get_contents("views/pie.html");

			echo $encabezado.$vista.$pie;
		}
	}
?>