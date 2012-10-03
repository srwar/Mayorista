
var x=$(document);
x.ready(iniciar);

function iniciar() {
	limpiar();
	limpiar2();
	var p=$("#botoncompras");
	p.click(mostrar1);
	var p=$("#botonpedidos");
	p.click(mostrar2);	
	var p=$("#botonpersonal");
	p.click(mostrar3);	
	var p=$("#botonranking");
	p.click(mostrar4);
	var p=$("#botonpedidosextranet");
	p.click(mostrar5);		
	var p=$("#botonmiscomprasextranet");
	p.click(mostrar6);
	var p=$("#MisProdutos");
	p.click(mostrar7);
	mover();
	ocultarErrores();
	ocultarLineas();
	$("#fecha").datepicker();
	
	$("#TableSorter").tableSorter();
				
}

function ocultarErrores() {
	$("#nombreI").css("display","none");
		$("#emailI").css("display","none");
		$("#dniI").css("display","none");	
		$("#cuitI").css("display","none");
		$("#campotextoI").css("display","none");
		$("#busquedaProductoI").css("display","none");
		$("#subcripcionProductoI").css("display","none");
	
}

function ocultarLineas() {
	for(x = 1; x <= 3; x++) {
		$("#"+"Producto"+x+"-"+x).hide();
	}	
}

function limpiar () {
	var x=$("#sis-compras"); x.hide();
	var x=$("#sis-pedidos"); x.hide();
	var x=$("#sis-personal"); x.hide();
	var x=$("#sis-ranking"); x.hide();
}

function mostrar1( ) {
	var x=$("#contenido");	
	limpiar();	
	x.hide("slow");
	x=$("#sis-compras");
	x.slideToggle("slow")
}

function mostrar2( ) {
	var x=$("#contenido");	
	limpiar();	
	x.hide("slow");
	var x=$("#sis-pedidos");		
	x.slideToggle("slow");
}
function mostrar3( ) {
	var x=$("#contenido");	
	limpiar();	
	x.hide("slow");
	var x=$("#sis-personal");		
	x.slideToggle("slow");
}
function mostrar4( ) {
	var x=$("#contenido");	
	limpiar();	
	x.hide("slow");
	var x=$("#sis-ranking");		
	x.slideToggle("slow");
}

function limpiar2() {
	var x=$("#sis-pedidosextranet"); x.hide();	
	var x=$("#sis-miscomprasextranet"); x.hide();		
	var p=$("#mostrarmisproductos"); p.hide();
}

function mostrar5( ) {
	var x=$("#contenido");		
	limpiar2();
	x.hide("slow");
	var x=$("#sis-pedidosextranet");		
	x.slideToggle("slow");
}

function mostrar6( ) {
	var x=$("#contenido");		
	limpiar2();
	x.hide("slow");
	var x=$("#sis-miscomprasextranet");		
	x.slideToggle("slow");
}

function mostrar7( ) {
	var x=$("#mostrarmisproductos");				
	x.slideToggle("slow");
}

function mover () {
	var x=$("#pedidos");
	x.draggable();
	x.resizable();	
	var x=$("#compras");
	x.draggable();
	x.resizable();	
	var x=$("#personal");
	x.draggable();
	x.resizable();	
	var x=$("#ranking");
	x.draggable();
	x.resizable();		
	var x=$("#ranking");
	x.draggable();
	x.resizable();	
	var x=$("#productos");
	x.draggable();
	x.resizable();	
	var x=$("#estadisticas");
	x.draggable();
	x.resizable();	
	var x=$("#horarios");
	x.draggable();
	x.resizable();	
	
}