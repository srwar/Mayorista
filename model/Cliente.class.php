<?php
	class Cliente {
		private $cuit; 
		private $apellido;
		private $nombre;		
		private $sexo;		
			
		function Cliente($cuit, $apellido, $nombre, $sexo) {
			$this->cuit = $cuit;
			$this->apellido = $apellido;
			$this->nombre = $nombre;
			$this->sexo = $sexo;		
		}
		
		public function getCuit() {
			return $this->cuit;
		}

		public function getApellido() {
			return $this->apellido;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function getSexo() {
			return $this->sexo;
		}	
	}