<?php
	
	class estandarCtrl {

		function __construct() {

		}

		function esEntero($valor) {
			return is_int((int)$valor);
		}

		function esUsuarioValido($usuario) {
			$patron = '/^[A-Za-z0-9_-]{3,15}$/';
			return preg_match($patron, $usuario);
		}

		function esContraseniaValida($conrasenia) {
			
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
	}

?>