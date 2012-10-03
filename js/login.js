
var x=$(document);
x.ready(iniciar);

function iniciar() {
	var x=$("#usuario");
	//var y=$("#clave");
	x.focus(enfocar);
	//y.focus(iniciary);
}

function enfocar() {
	var x=$("#usuario");	
	x.atrr("value","");
}

/*function iniciary() {
	var x=$("#clave");	
	x.atrr("value","");
}*/

