<?php
	
	class estandarCtrl {

		function __construct() {

		}

		function esEntero($valor) {
			return is_int((int)$valor);
		}

		function esUsuarioValido($cadena) {
			$patron = '/^[A-Za-z0-9_-]{3,15}$/';
			return preg_match($patron, $cadena);
		}

		function esNombreValido($cadena) {
			$patron = '/^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/';
			return preg_match($patron, $cadena);
		}

		function esApellidoValido($cadena) {
			$patron = '/^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/';
			return preg_match($patron, $cadena);
		}

		function esTelefonoValido($cadena) {
			$patron = '/^[0-9]{3,4}-? ?.?[0-9]{3}-? ?.?[0-9]{3}$/';
			return preg_match($patron, $cadena);
		}

		function esContrasenaValida($conrasena) {
			
		}

		function limpiarCadena($cadena) {
			$cadena = str_ireplace("SELECT","",$cadena);
			$cadena = str_ireplace("COPY","",$cadena);
			$cadena = str_ireplace("DELETE","",$cadena);
			$cadena = str_ireplace("DROP","",$cadena);
			$cadena = str_ireplace("DUMP","",$cadena);
			$cadena = str_ireplace(" OR ","",$cadena);
			$cadena = str_ireplace("%","",$cadena);
			$cadena = str_ireplace("LIKE","",$cadena);
			$cadena = str_ireplace("--","",$cadena);
			$cadena = str_ireplace("^","",$cadena);
			$cadena = str_ireplace("[","",$cadena);
			$cadena = str_ireplace("]","",$cadena);
			//$cadena = str_ireplace("\","",$cadena);
			$cadena = str_ireplace("!","",$cadena);
			$cadena = str_ireplace("¡","",$cadena);
			$cadena = str_ireplace("?","",$cadena);
			$cadena = str_ireplace("=","",$cadena);
			$cadena = str_ireplace("&","",$cadena);
			return $cadena;
		}

		function estaLogueado(){
			if( isset($_SESSION['usuario']) )
				return true;
			return false;
		}

		function esAdmin(){
			if( isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'administrador' )
				return true;
			return false;
		}

		function esUsuario(){
			if( isset($_SESSION['tipo']) && $_SESSION['tipo'] == 'usuario' )
				return true;
			return false;
		}
		
		function cerrar_sesion(){
			session_unset();
			session_destroy();		
			setcookie(session_name(), '', time()-3600);
		}
		function iniciar_sesion($id_user, $pass){
			//ir a la base buscarlo validarlo
			//if ( no lo encontro )
				//return false;
			$_SESSION['id_usuario'] = $id_usuario;
			$_SESSION['tipo'] = $type;
			$_SESSION['usuario'] = $usuario;
			return true;
		}

		function pie() {
			if($this->estaLogueado()) {
				$pie = file_get_contents("views/pie_sesion.html");
				$usuario = $_SESSION['usuario'];
				$pie = str_replace("{usuario}", $usuario, $pie);
			} else {
				$pie = file_get_contents("views/pie.html");
			}

			return $pie;
		}

		function encriptar($cadena) {
			$salt = '$bgr$/'; 
			return sha1(md5($salt . $cadena));
		}

		function obtenerExtensionArchivo($archivo) {
			$temporal = explode(".", $archivo);
			return end($temporal);
		}

		function moverRenombrarImagen($temporal, $generado, $ubicacion){
			$url = 'img/'.$ubicacion;
			if (file_exists($url.$generado)) {
				unlink($url.$generado);
			}
			move_uploaded_file($temporal, $url.$generado);
		}

		function generarNombreImagen($categoria, $id, $extension){
			$nombre = $categoria.$id.".".$extension;
			return $nombre;			
		}
	}

?>