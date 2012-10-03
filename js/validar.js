
function validaFloat(value){
	return(value.match(/^[0-9]+(,[0-9]+)*$/));
}

function esDigitoValido(strDigito) {
	return(/^[0-9]$/.test(strDigito));
}

function esNumeroEnteroValido(strNumeroEntero) {
  	return(/^[\-]*[0-9]+$/.test(strNumeroEntero));
}

/* Determina si el parametro recibido es un numero con dos decimales positivo o negativo */
function esNumeroDecimalValido(strNumeroDecimal) {
	return (/^[\-]*[0-9]+\.[0-9][0-9]$/.test(strDecimal));
}

function esFechaValida(strFecha) {
  if(strFecha.length < 10 || strFecha == null) {
  	return false;
  }
	// var fechaValida = (/^[0-3][0-9]\/[0-1][0-9]\/[0-2][0-9][0-9][0-9]$/.test(strFecha));
  var fechaValida = (/^[0-3][0-9]\/[0-1][0-9]\/[0-2][0-9][0-9][0-9]$/.test(strFecha));

  if (!fechaValida) {
    return false;
  } else {
	// 12/05/2011
	/* LOGICA PARA DETERMINAR VALIDEZ */
		var dia  =  parseInt(strFecha.substr(0,2));
        var mes  =  parseInt(strFecha.substr(3,2));
        var anio =  parseInt(strFecha.substr(6,4));
		//alert(dia+' ' +mes+' '+anio);
 		if(dia < 1 || (mes < 1 || mes > 12)) {
			return false;
		}
		
     	switch(mes) {
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:
				return (dia <= 31);
			break;
			case 4: 
			case 6: 
			case 9: 
			case 11:
				return (dia <= 30);
			break;
			case 2:
				if(esBisiesto(anio)) {
					return (dia <= 29);
				} else {
					return (dia <= 28);	
				}
			break;
    	}
  	}
}

$.validator.addMethod('fecha', esFechaValida, 'Fecha No valida');

function esRangoFechaValido(fechaDesde, fechaHasta) {
	//if(esFechaValida(fechaDesde) && esFechaValida(fechaHasta)) {
		var Ddia  =  parseInt(fechaDesde.substr(0,2));
        var Dmes  =  parseInt(fechaDesde.substr(3,2));
        var Danio =  parseInt(fechaDesde.substr(6,4));
		var Hdia  =  parseInt(fechaHasta.substr(0,2));
        var Hmes  =  parseInt(fechaHasta.substr(3,2));
        var Hanio =  parseInt(fechaHasta.substr(6,4));
		var Desde = new Date();
		var Hasta = new Date();
		Desde.setFullYear(Danio, Dmes, Ddia);
		Hasta.setFullYear(Hanio, Hmes, Hdia);
		return (Desde <= Hasta);
		/*if(Danio < Hanio) {
			return true;
		} else {
			if(Danio == Hanio) {
					if(Dmes < Hmes) {
						return true;
					} else if (Dmes > Hmes){
						return false;
					}
					else {
						if(Dmes == Hmes) {
							if(Ddia <= Hdia) {
								return true;	
							} else {
								return false;
							}
						} else {
							return false;	
						}
					}
			} else {
				return false;			
			}	
		}
	} else { 
		return false;	
	}*/
	
}

function esBisiesto(anio) {
	if (((anio % 4) == 0) && (anio % 100 != 0) || ((anio % 400) == 0)) {
		return true;
	} else {
		return false;
	}
}

function compararStr(fechaDesde, fechaHasta) {
	if(fechaDesde <= fechaHasta) {
		alert('Sip!!');
	} else {
		alert('Nop!!');	
	}	
}

function esPalabra(str) {
	var x = str.length;
	for(var i = 0; i < x; i++) {
		
	}
	substr()
	return (/^[A-z]+$/.test(str));	
}

function esDni(str) {
	if(esNumeroEnteroValido(str) && str >= 10000000 && str <= 100000000) {
		return true;
	} else {
		return false;	
	}	
}

function esNombre(str) {
  		return (/^[A-z ]+$/.test(str));
}
$.validator.addMethod('nombre', esNombre, 'Ingrese un nombre Valido');

function esTexto(str) {
		return (/^([\W]?\s*[\w-]+\s*[\W]?)+$/.test(str));	
}

function esCorreo(str) {
		return /^[\w-]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}$/.test(str);	
}

function esItemSelected(lista) {
	indice = lista.selectedIndex;
	if( indice == null || indice == 0 ) {
		return false;
	} else
		return true;	
}

function esCuit(str) {
	if(str.length != 11) {
		return false;
	} else {
		if(esNumeroEnteroValido(str)) {
			cuit = parseInt(str);
			sexo = parseInt(cuit / Math.pow(10,9));
			if(sexo == 20 || sexo == 27 || sexo == 23 || sexo == 24 || sexo == 30) {
				dni =  parseInt(cuit / 10) - (sexo * Math.pow(10,8));
				if(dni < 10000000 || dni >= 100000000) {
					return false;
				} else {
					verificador = cuit % 10;
					if(verificador < 0 || verificador > 9) {
						return false;
					} else {
						return true;
					}
				}	
			} else {
				return false;	
			}
		} else {
			return false;	
		}		
	}
}

function esCuitValido(str) {
	var suma = 0;
	var serie = 2;
	var digito = 0;
	if(esCuit(str)) {			
		for(i = 9; i >= 0; i--) {
			if(serie == 8)
				serie = 2;
			suma = suma + (parseInt(str.substr(i,1)) * serie);
			serie++;	
		}
		digito = 11 - (suma % 11);
		if(digito == 11) {
			digito = 0;
		}
		if(digito == 10) {
			digito = 9;
		}
		return digito == Number(str.substr(10,1));
	} else {
		return false;
	}	
}

$.validator.addMethod('cuit', esCuitValido, 'CUIT no  valido');

function esDigitoValido(strDigito) {
	return(/^[0-9]$/.test(strDigito));
}

/* Determina si el parametro recibido es un numero entero positivo o negativo */
function esNumeroEnteroValido(strNumeroEntero) {
	return(/^[\-]*[0-9]+$/.test(strNumeroEntero));
}

/* Determina si el parametro recibido es un numero con dos decimales positivo o negativo */
function esNumeroDecimalValido(strNumeroDecimal) {
	return (/^[\-]*[0-9]+\.[0-9][0-9]$/.test(strDecimal));
}

function contrasena(str) {
	return (/^([\w-]{8,})+$/.test(str));	
}

function esAlfaNumber(str) {
	return (/^([\w ])+$/.test(str));
}
