function ocultar(elemento) {
	var padre = elemento.parentNode;
	var nombre = elemento.value;
	var abuelo = padre.parentNode;
	var bisabuelo = abuelo.parentNode;

	bisabuelo.style.display = 'none';
}

function esUsuarioEmailTel(elemento) {
	var padre = elemento.parentNode;
	var nombre = elemento.value;
	var abuelo = padre.parentNode;

	if (nombre=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-z0-9_-]{3,15})|([0-9]{3,4}-? ?.?[0-9]{3}-? ?.?[0-9]{3}) | ([_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3}))+$/;
  
	  if(expreg.test(nombre)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esCodigo(elemento) {
	var padre = elemento.parentNode;
	var codigo = elemento.value;
	
	alert(elemento);

	if(codigo=="") {
		padre.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^([1-9][0-9]{4})+$/;
  
	  if(expreg.test(codigo)) {
		padre.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	padre.className = 'form-group has-error';
	  	return false;
	  }
	}
}
}

function esProducto(elemento) {
	var padre = elemento.parentNode;
	var nombre = elemento.value;
	var abuelo = padre.parentNode;

	if (nombre=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ0-9]{2,})|([A-Za-záéíóúñ0-9]{2,}[\s][A-Za-záéíóúñ0-9]{2,}))+$/;
  
	  if(expreg.test(nombre)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esServicio(elemento) {
	var padre = elemento.parentNode;
	var servicio = elemento.value;
	var abuelo = padre.parentNode;

	if (servicio=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ0-9]{2,})|([A-Za-záéíóúñ0-9]{2,}[\s][A-Za-záéíóúñ0-9]{2,}))+$/;
  
	  if(expreg.test(servicio)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esDescripcion(elemento) {
	var padre = elemento.parentNode;
	var nombre = elemento.value;
	var abuelo = padre.parentNode;

	if (nombre=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ0-9\.\,]{2,})|([A-Za-záéíóúñ0-9\.\,]{2,}[\s][A-Za-záéíóúñ0-9\.\,]{2,}))+$/;
  
	  if(expreg.test(nombre)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esPrecio(elemento) {
	var padre = elemento.parentNode;
	var precio = elemento.value;
	var abuelo = padre.parentNode;

	if (precio=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^([1-9][0-9]*)+$/;
  
	  if(expreg.test(precio)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esNombre(elemento) {
	var padre = elemento.parentNode;
	var nombre = elemento.value;
	var abuelo = padre.parentNode;

	if (nombre=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(nombre)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esApellido(elemento) {
	var padre = elemento.parentNode;
	var apellido = elemento.value;
	var abuelo = padre.parentNode;

	if (apellido=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(apellido)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esUsuario(elemento) {
	var padre = elemento.parentNode;
	var usuario = elemento.value;
	var abuelo = padre.parentNode;

	if (usuario=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^[A-Za-z0-9_-]{3,15}$/;
  
	  if(expreg.test(usuario)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esEmail(elemento) {
	var padre = elemento.parentNode;
	var correo = elemento.value;
	var abuelo = padre.parentNode;

	if (correo=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
  
	  if(expreg.test(correo)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esContrasena(elemento) {
	var padre = elemento.parentNode;
	var contrasena = elemento.value;

	if (contrasena=="") {
		padre.className = 'col-xs-12 col-sm-3 col-md-3 has-error';
		return false;
	} else {
		var expreg = /(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,}.+$)/;
  
	  if(expreg.test(contrasena)) {
		padre.className = 'col-xs-12 col-sm-3 col-md-3 has-success';
		return true;
	  }
	  else {
	  	padre.className = 'col-xs-12 col-sm-3 col-md-3 has-error';
	  	return false;
	  }
	}
}

function esContrasenia(elemento) {
	var padre = elemento.parentNode;
	var contrasena = elemento.value;

	if (contrasena=="") {
		padre.className = 'has-error';
		return false;
	} else {
		var expreg = /(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,}.+$)/;
  
	  if(expreg.test(contrasena)) {
		padre.className = 'has-success';
		return true;
	  }
	  else {
	  	padre.className = 'has-error';
	  	return false;
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
		return false;
	} else {
		var expreg = /(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,}.+$)/;
  
	  if(expreg.test(contrasena2) && (contrasena1==contrasena2)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	padre.className = 'col-xs-12 col-sm-3 col-md-3 has-error';
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esDomicilio(elemento) {
	var padre = elemento.parentNode;
	var domicilio = elemento.value;
	var abuelo = padre.parentNode;

	if (domicilio=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ0-9]{1,})+$/;
  
	  if(expreg.test(domicilio)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esColonia(elemento) {
	var padre = elemento.parentNode;
	var colonia = elemento.value;
	var abuelo = padre.parentNode;

	if (colonia=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(colonia)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esTelefono(elemento) {
	var padre = elemento.parentNode;
	var telefono = elemento.value;
	var abuelo = padre.parentNode;

	if (telefono=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^[0-9]{3,4}-? ?.?[0-9]{3}-? ?.?[0-9]{3}$/;
  
	  if(expreg.test(telefono)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function esCodigoPostal(elemento) {
	var padre = elemento.parentNode;
	var codigo_postal = elemento.value;
	var abuelo = padre.parentNode;

	if (codigo_postal=="" && codigo_postal.length != 5) {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^[0-9]{5}$/;
  
	  if(expreg.test(codigo_postal)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-warning';
	  	return false;
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
	var usuario = document.getElementById('usuario-login');
	var contrasena = document.getElementById('password-login')	

	if(esUsuario(usuario) && esContrasenia(contrasena)) {
		return true;
		alert('ola k ase');
	} else {
		return false;
	}
}

function estaVacio(elemento) {
	var padre = elemento.parentNode;
	var texto = elemento.value;
	var abuelo = padre.parentNode;

	if (texto=="") {
		abuelo.className = 'form-group has-error';
		return false;
	} else {
		var expreg = /^(([A-Za-záéíóúñ]{2,})|([A-Za-záéíóúñ]{2,}[\s][A-Za-záéíóúñ]{2,}))+$/;
  
	  if(expreg.test(texto)) {
		abuelo.className = 'form-group has-success';
		return true;
	  }
	  else {
	  	abuelo.className = 'form-group has-error';
	  	return false;
	  }
	}
}

function validarFormContacto(formulario) {
	var nombre = document.getElementById('nombre');
	var correo = document.getElementById('email');
	var mensaje = document.getElementById('mensaje');
	var es_correcto = true;

	if(!esNombre(nombre)) {
		es_correcto = false;
	}
	if(!esEmail(correo)) {
		es_correcto = false;
	}
	if (!estaVacio(this)) {
		es_correcto = false;
	};

	return es_correcto;
}

function esProductoCorrecto(formulario) {
	var id = document.getElementById('id_producto');
	var producto = document.getElementById('producto');
	var descripcion = document.getElementById('descripcion');
	var precio = document.getElementById('precio');

	var es_correcto = true;

	if(!esProducto(producto)) {
		es_correcto = false;
	}
	if(!esDescripcion(descripcion)) {
		es_correcto = false;
	}
	if(!esPrecio(precio)){
		es_correcto = false;
	}
	return es_correcto;
}

function esServicioCorrecto(formulario) {
	var id = document.getElementById('id_servicio');
	var servicio = document.getElementById('servicio');
	var descripcion = document.getElementById('descripcion');
	var precio = document.getElementById('precio');

	var es_correcto = true;

	if(!esServicio(servicio)) {
		es_correcto = false;
	}
	if(!esDescripcion(descripcion)) {
		es_correcto = false;
	}
	if(!esPrecio(precio)){
		es_correcto = false;
	}
	return es_correcto;
}

function esRegistroCorrecto(formulario) {
	var nombre = document.getElementById('nombre');
	var apellidos = document.getElementById('apellidos');
	var usuario = document.getElementById('usuario');
	var correo = document.getElementById('correo');
	var telefono = document.getElementById('telefono');
	var contrasena1 = document.getElementById('contrasena1');
	var contrasena2 = document.getElementById('contrasena2');
	var domicilio = document.getElementById('domicilio');
	var colonia = document.getElementById('colonia');
	var codigo_postal = document.getElementById('codigo_postal');

	var es_correcto = true;

	if(!esNombre(nombre)) {
		es_correcto = false;
	}
	if(!esApellido(apellidos)) {
		es_correcto = false;
	}
	if(!esUsuario(usuario)) {
		es_correcto = false;
	}
	if(!esEmail(correo)) {
		es_correcto = false;
	}
	if(!esTelefono(telefono)) {
		es_correcto = false;
	}
	if(!esContrasena(contrasena1)) {
		es_correcto = false;
	}
	if(!esContrasena(contrasena2)) {
		es_correcto = false;
	}
	if(!coinciden(contrasena2)) {
		es_correcto = false;
	}
	if(!esDomicilio(domicilio)) {
		es_correcto = false;
	}
	if(!esColonia(colonia)) {
		es_correcto = false;
	}
	if(!esCodigoPostal(codigo_postal)) {
		es_correcto = false;
	}
	return es_correcto;
}

function habilitaFormulario() {
	var inpus = document.getElementsByTagName('input');
	var selects = document.getElementsByTagName('select');

	for(var i = 0; i < inpus.length; i++) {
		inpus[i].readOnly = false;
	}

	for(var j = 0; j < selects.length; j++) {
		selects[j].readOnly = false;
	}
}

function limpiarFormulario() {
	document.getElementById('form_producto').reset();
}