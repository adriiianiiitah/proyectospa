<?php
	$control = $_GET['ctrl'];

	switch ($control) {
		case 'producto':
			require_once('controls/productoCtrl.php');
			$control = new ProductoCtrl();
			break;
		case 'masaje':
			# require_once('controls/masajeControl.php');
			break;
		case 'tratamiento':
			# require_once('controls/tratamientoControl.php');
			break;
		case 'aparatologia':
			# require_once('controls/aparatologiaControl.php');
			break;
		case 'servicio':
			# require_once('controls/servicioControl.php');
			break;/*
		case 'producto':
			require_once('controls/productoCtrl.php');
			$control = new ProductoCtrl();
			break;*/
		case 'contacto':
			# require_once('controls/servicioControl.php');
			break;
		default:
			http_response_code(404);
			break;
	}
	$control -> ejecutar();
?> 