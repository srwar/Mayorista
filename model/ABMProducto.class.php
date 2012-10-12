<?php   #
	class ABMProducto {
		private $codigo; 
		private $stock;
		private $stock_min;
		private $precio;
		private $nombre;
		private $p_cantidad;
		private $p_tamanio;
		private $p_unidad_medida;//lista
		private $categoria;//lista
		private $proveedor;//cuit valido
		private $oferta;//bool
		
		function ABMProducto($codigo, $stock, $stock_min, $precio, $nombre, $p_cantidad, $p_tamanio, $p_unidad_medida, $categoria, $proveedor, $oferta) {
			$this->codigo = $codigo;
			$this->stock = $stock;
			$this->stock_min = $stock_min;
			$this->precio = $precio;                        
			$this->nombre = $nombre;
			$this->p_cantidad = $p_cantidad;
			$this->p_tamanio = $p_tamanio;
			$this->p_unidad_medida = $p_unidad_medida;
			$this->categoria = $categoria;
			$this->proveedor = $proveedor;
			$this->oferta = $oferta;                        		
		}
				
		public function getCodigo() {
			return $this->codigo;
		}

		public function setCodigo($codigo) {
			$this->codigo = $codigo;
		}

		public function getStock() {
			return $this->stock;
		}

		public function setStock($stock) {
			$this->stock = $stock;
		}

		public function getStock_min() {
			return $this->stock_min;
		}

		public function setStock_min($stock_min) {
			$this->stock_min = $stock_min;
		}

		public function getPrecio() {
			return $this->precio;
		}

		public function setPrecio($precio) {
			$this->precio = $precio;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getP_cantidad() {
			return $this->p_cantidad;
		}

		public function setP_cantidad($p_cantidad) {
			$this->p_cantidad = $p_cantidad;
		}

		public function getP_tamanio() {
			return $this->p_tamanio;
		}

		public function setP_tamanio($p_tamanio) {
			$this->p_tamanio = $p_tamanio;
		}

		public function getP_unidad_medida() {
			return $this->p_unidad_medida;
		}

		public function setP_unidad_medida($p_unidad_medida) {
			$this->p_unidad_medida = $p_unidad_medida;
		}

		public function getCategoria() {
			return $this->categoria;
		}

		public function setCategoria($categoria) {
			$this->categoria = $categoria;
		}

		public function getProveedor() {
			return $this->proveedor;
		}

		public function setProveedor($proveedor) {
			$this->proveedor = $proveedor;
		}

		public function getOferta() {
			return $this->oferta;
		}

		public function setOferta($oferta) {
			$this->oferta = $oferta;
		}         
	}
?>        