<?php
	class PedidoProveedor {
		private $nro_pedido; 
		private $proveedor;
		private $fecha_solicitud;
		private $fecha_recepcion;
		private $empleado_venta;
		private $empleado_deposito;
		private $estado_pedido;
		private $producto;
		
		function PedidoCliente($nro_pedido, $proveedor, $fecha_solicitud, $fecha_recepcion, $empleado_venta, $empleado_deposito, $estado_pedido) {
			$this->nro_pedido = $nro_pedido;
                        $this->proveedor = $proveedor;
                        $this->fecha_recepcion = $fecha_recepcion;
                        $this->fecha_solicitud = $fecha_solicitud;
                        $this->empleado_venta = $empleado_venta;
                        $this->empleado_deposito = $empleado_deposito;
                        $this->estado_pedido = $estado_pedido;
		}
	
	}