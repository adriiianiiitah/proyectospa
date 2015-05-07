<?php
	$control = $_GET['ctrl'];

	switch ($control) {
		case '':
		case 'inicio':
			break;
		case 'producto':
			require_once('controls/productoCtrl.php');
			$control = new ProductoCtrl();
			break;
		case 'masaje':
			require_once('controls/masajeCtrl.php');
			$control = new MasajeCtrl();
			break;
		case 'tratamiento':
			require_once('controls/tratamientoCtrl.php');
			$control = new TratamientoCtrl();
			break;
		case 'aparatologia':
			# require_once('controls/aparatologiaControl.php');
			break;
		case 'estetica':
			require_once('controls/servicioCtrl.php');
			$control = new ServicioCtrl();
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