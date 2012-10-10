<?php
	class PedidoCliente {
		private $nro_pedido; 
		private $cliente;
		private $fecha_solicitud;
		private $fecha_recepcion;
		private $empleado_venta;
		private $empleado_deposito;
		private $estado_pedido;
		private $producto;
		
		function PedidoCliente($nro_pedido, $cliente, $fecha_solicitud, $fecha_recepcion, $empleado_venta, $empleado_deposito, $estado_pedido) {
			$this->nro_pedido = $nro_pedido;
                        $this->cliente = $cliente;
                        $this->fecha_recepcion = $fecha_recepcion;
                        $this->fecha_solicitud = $fecha_solicitud;
                        $this->empleado_venta = $empleado_venta;
                        $this->empleado_deposito = $empleado_deposito;
                        $this->estado_pedido = $estado_pedido;
		}
	}