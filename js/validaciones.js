
function esNombre(elemento) {
	var padre = elemento.parentNode;
	var nombre = elemento.value;
	var abuelo = padre.parentNode;

	if (nombre=="") {
		abuelo.className = 'form-group has-error'
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(nombre)) {
		abuelo.className = 'form-group has-success'
	  }
	  else {
	  	abuelo.className = 'form-group has-error'
	  }
	}
}

function esApellido(elemento) {
	var padre = elemento.parentNode;
	var apellido = elemento.value;
	var abuelo = padre.parentNode;

	if (apellido=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(apellido)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esUsuario(elemento) {
	var padre = elemento.parentNode;
	var usuario = elemento.value;
	var abuelo = padre.parentNode;

	if (usuario=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^[A-Za-z0-9_-]{3,15}$/;
  
	  if(expreg.test(usuario)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esEmail(elemento) {
	var padre = elemento.parentNode;
	var correo = elemento.value;
	var abuelo = padre.parentNode;

	if (correo=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  
	  if(expreg.test(correo)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esContrasena(elemento) {
	var padre = elemento.parentNode;
	var contrasena = elemento.value;

	if (contrasena=="") {
		padre.className = 'col-xs-12 col-sm-3 col-md-3 has-error';
	} else {
		var expreg = /(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,}.+$)/;
  
	  if(expreg.test(contrasena)) {
		padre.className = 'col-xs-12 col-sm-3 col-md-3 has-success';
	  }
	  else {
	  	padre.className = 'col-xs-12 col-sm-3 col-md-3 has-error';
	  }
	}
}

function coinciden(elemento) {
	var padre = elemento.parentNode;
	var hermano = document.getElementById('contrasena1');
	var contrasena2 = elemento.value;
	var abuelo = padre.parentNode;
	var contrasena1 = hermano.value;

	if (contrasena2=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,}.+$)/;
  
	  if(expreg.test(contrasena2) && (contrasena1==contrasena2)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	padre.className = 'col-xs-12 col-sm-3 col-md-3 has-error';
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esDomicilio(elemento) {
	var padre = elemento.parentNode;
	var domicilio = elemento.value;
	var abuelo = padre.parentNode;

	if (domicilio=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ0-9]{1,})+$/;
  
	  if(expreg.test(domicilio)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esColonia(elemento) {
	var padre = elemento.parentNode;
	var colonia = elemento.value;
	var abuelo = padre.parentNode;

	if (colonia=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(colonia)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esTelefono(elemento) {
	var padre = elemento.parentNode;
	var telefono = elemento.value;
	var abuelo = padre.parentNode;

	if (telefono=="") {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^[0-9]{3,4}-? ?.?[0-9]{3}-? ?.?[0-9]{3}$/;
  
	  if(expreg.test(telefono)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  }
	}
}

function esCodigoPostal(elemento) {
	var padre = elemento.parentNode;
	var codigo_postal = elemento.value;
	var abuelo = padre.parentNode;

	if (codigo_postal=="" && codigo_postal.length != 5) {
		abuelo.className = 'form-group has-error';
	} else {
		var expreg = /^[0-9]{5}$/;
  
	  if(expreg.test(codigo_postal)) {
		abuelo.className = 'form-group has-success';
	  }
	  else {
	  	abuelo.className = 'form-group has-warning';
	  }
	}
}

var numero_telefonos = 1;

function agregarTelefono() {
	var div_telefono = document.getElementById('div-telefono');
	var nuevo_div = div_telefono.cloneNode(true);
	var etiqueta = nuevo_div.getElementsByTagName('label')[0];
	div_telefono.setAttribute('id','div_telefono'+numero_telefonos);
	etiqueta.setAttribute("for", "telefono"+numero_telefonos);
	caja =  nuevo_div.getElementsByTagName('input')[0];
	caja.setAttribute("id", "telefono"+numero_telefonos);

	var div_contrasenas = document.getElementById('div-contrasenas');
	var div_padre = div_telefono.parentNode;
	div_padre.insertBefore(nuevo_div, div_contrasenas);
	numero_telefonos++;
}

function esUsuarioRegistrado() {
	var usuario = document.getElementById('usuario-login');
	return false;
	
}

function esPassworCorrecto() {
	var usuario = document.getElementById('usuario-login');
	var password = document.getElementById('password-login');
	return true;
	
}

function esUsuarioValido(formulario) {
	if(esUsuarioRegistrado() && esPassworCorrecto()) {
		formulario.style.display = 'none';
		//cerrar sesion ocultar
	} else {
		alert('El Usuario y la contrasrña son incorrectos.');
	}
}