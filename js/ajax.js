function nuevoAjax()
{
	var xmlhttp=false;
	try
	{
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e)
	{
		try
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E)
		{
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') xmlhttp=new XMLHttpRequest();
		}
	}
	return xmlhttp; 
}

function mostrarServiciosEstetica(){
	
	var miajax = nuevoAjax();
	
	miajax.open('post','consultas/datos_estetica.php',true);
	
	miajax.onreadystatechange = function(){

		if(miajax.readyState == 4){
			
			var json = JSON.parse(miajax.responseText);
			console.log(json);
			
			//var select = document.getElementById("lista");
			for(i in json){
				//var texto = document.createTextNode(json[i].nombre);
				//var option = document.createElement('option');
				//option.setAttribute('value',json[i].id);
				//option.appendChild(texto);
				//select.appendChild(option);
			}
			
		}
	}
	miajax.send(null);
}