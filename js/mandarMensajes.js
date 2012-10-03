$(function() {
	$("input").button();
	$("button").button();
});

		

function cantidadPedido(form) {
	if(esNumeroEnteroValido(form.value)) {
		desmarcarError(form);
		return true;
		
	}
	else {
		marcarError(form);
		return false;
	}
}

function desmarcarError(form) {
	$(form).css("background","");
}

function marcarError(form) {
	$(form).css("background", "rgba(128,255,128,.5)");
}

function verificarPedido(formulario) { 
	errores = 0; 
	elemento = formulario.cantidad;
	for(y = 0; y < elemento.length; y++) {
		if(!cantidadPedido(elemento[y])) {
			errores++;		
		}	
	}
	
	if(errores == 0) {
		formulario.submit();
	}	
}

function validarBusqueda(form) {
		if(!esAlfaNumber(form.busqueda.value)) {
			marcarError(form.busqueda);
			$("#busquedaProductoI").css("display","");			
		} else {
			$("#busquedaProductoI").css("display","none");
			desmarcarError(form.busqueda);	
			//form.submit();	
		}
}

function validarSubcripcion(form) {
		if(!esCorreo(form.subcripcion.value)) {
			marcarError(form.subcripcion);
			$("#subcripcionProductoI").css("display","");			
		} else {
			$("#subcripcionProductoI").css("display","none");
			desmarcarError(form.subcripcion);	
			//form.submit();	
		}
}

function validarMensaje(f) {
	error = 0;
	if(!esNombre(f.nombre.value)) {
		error++; 
		marcarError(f.nombre);
		} else {
		desmarcarError(f.nombre);
	}
		
	if(!esCorreo(f.email.value)) {
		error++;
		marcarError(f.email);		
	}  else {
		desmarcarError(f.email);
	}
	if(!esItemSelected(f.tipoDocumento)) {
		error++;	
		marcarError(f.tipoDocumento);
	}  else {
		desmarcarError(f.tipoDocumento);	
	}
	if(!esCuit(f.cuit.value) && !esCuitValido(f.cuit.value)) {
		error++;	
		marcarError(f.cuit);		
	}  else {
		desmarcarError(f.cuit);
	}
	if(!esTexto(f.campotexto.value, 30)) {
		error++;	
		marcarError(f.campotexto);
	}  else {
		desmarcarError(f.campotexto);
	}
	if(error == 0) {
		return true;
	}
}

function validarBuscarCompras(form) {
	if(esRangoFechaValido(form.fechadesde.value, form.fechahasta.value)) {
		desmarcarError(form.fechadesde);
		desmarcarError(form.fechahasta);
		form.submit();	
	} else {
		marcarError(form.fechadesde);
		marcarError(form.fechahasta);
		alert('Rango de fecha no valido');
		
	}		
}

function validarFecha(form) {
	if(!esFechaValida(form.value)) {
		marcarError(form);
		return false;
	} else {
		desmarcarError(form);	
		return true;
	}	
}


function agregarProducto(elemento) {
	x = elemento.getAttribute("id");
	x = x +"-"+x.substr(x.length - 1,1);	
	$("#"+x).show();	
}

function quitarProducto(elemento) {
	$(elemento).hide();
}

function intoDatePicker(form) {
	$(form).datepicker();	
}

$(function(){
	$('#enviarMensaje').validate({
		rules: {
			nombre: {required: true},
			dni: { required: true, number: true, minlength: 8, maxlength: 8 },
			email: { required: true, email: true }, 
			cuit: { required: true, cuit: true},
			campotexto: {required: true, minlength: 20, maxlength: 100},
		},			
		messages: {
			nombre: {required: 'Debe ingresar el nombre'},
			dni: { required: 'Debe ingresar un numero un DNI', number: 'Debe ingresar un numero', minlength: 'DNI no valido', maxlength: 'Solo requiere 8 caracteres' },
			email: { required: 'Debe ingresar un correo electronico', email: 'Debe ingresar el correo electronico valido.'},
			cuit: {required: 'Ingrese CUIT'},
			campotexto: {required: 'Escriba un mensaje', minlength: 'Escriba minimo 20 caracteres', maxlength: 'Solo se permite 100 caracteres como maximo'}
		}
	});
});

$(function () {
	$('#buscarCompras').validate({
		rules: {
			fechadesde: {},
			fechahasta: {}
		},
		messages: {
			fechadesde: {},
			fechahasta: {}	
		}
	});		
});

$(function () {
	$('#buscarPersonal').validate({
		rules: {
			buscarlegajo: {required: true, number: true},
			buscarnombre: {nombre: true, minlength: 3},
			buscarfecha: {fecha: true},
			buscarcargo: {number: true}
		},
		messages: {
			buscarlegajo: {required: 'Ingrese numero de legajo', number: 'Ingrese numero de legajo'},
			buscarnombre: {nombre: 'Ingrese un nombre valido', minlength: 'Ingrese un nombre con de 3 caracteres'},
			buscarfecha: {fecha: 'Ingrese una fecha valida'},
			buscarcargo: {number: 'Ingrese un numero'}			
		}		
	});	
});

function quitarValue(form) {
	form.value = "";
}

function validarBusquedaPersonal(form) {
	error = 0;
	
	if(!esNumeroEnteroValido(form.buscarlegajo.value)) {
		error++;
		marcarError(form.buscarlegajo);
	} else {
		desmarcarError(form.buscarlegajo);
	}
	if(!esFechaValida(form.buscarfecha.value)) {
		error++;
		marcarError(form.buscarfecha);
	} else {
		desmarcarError(form.buscarfecha);
	}
	if(!esNombre(form.buscarnombre.value)) {
		error++;
		marcarError(form.buscarnombre);
	} else {
		desmarcarError(form.buscarnombre);
	}
	if(!esItemSelected(form.buscarcargo)) {
		error++;
		marcarError(form.buscarcargo);
	} else {
		desmarcarError(form.buscarcargo);
	}
	if(error == 0) {
		return true;	
	}
}