<?php
	class ProductoCtrl {
		private $model;

		function __construct() {
			require_once('./models/ProductoMdl.php');
			$this->model = new ProductoMdl();
		}

		public function ejecutar() {
			$accion = $_GET['act'];

			switch ($accion) {
				case 'agregar':
					if(empty($_POST)) {
						require_once('./views/agregarProducto.html');
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

			//if($this->)

			$resultado = $this -> model -> agregar($imagen, $producto, $id_producto, $descripcion, $precio);
			
		}

		function esProductoValido() {

		}

		function listar() {
			$resultado = $this -> model -> listar(); 

			//var_dump($resultado);

			$encabezado = file_get_contents("views/navegacion.html");
			$vista = file_get_contents("views/productos.html");
			$pie = file_get_contents("views/pie.html");

			$inicio = strrpos($vista,'<!-- empieza -->');
			$final = strrpos($vista,'<!-- termina -->') + 17;

			$tarjeta = substr($vista,$inicio,$final-$inicio);

			$lista = '';
			foreach ($resultado as $producto) {

			    $tarjetita = $tarjeta;

			    $diccionario = array(
					'{producto}' => $producto['producto'], 
					'{descripcion}' => $producto['descripcion'],
					'{precio}' => $producto['precio'], 
					'{imagen}' => $producto['imagen']
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

				if (is_int((int)$id)) { 

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
						'{imagen}' => $producto['imagen']
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