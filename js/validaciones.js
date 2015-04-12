
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
