<?php
	class Cliente {
		private $cuit;
		private $contrasena;
		private $apellido;
		private $nombre;		
		private $sexo;		
			
		function Cliente($cuit, $contrasena, $apellido, $nombre, $sexo) {
			$this->cuit = $cuit;
			$this->contrasena = $contrasena;
			$this->apellido = $apellido;
			$this->nombre = $nombre;
			$this->sexo = $sexo;		
		}
		
		public function getCuit() {
			return $this->cuit;
		}

		public function setCuit($cuit) {
			$this->cuit = $cuit;
		}

		public function getContrasena() {
			return $this->contrasena;
		}

		public function setContrasena($contrasena) {
			$this->contrasena = $contrasena;
		}

		public function getApellido() {
			return $this->apellido;
		}

		public function setApellido($apellido) {
			$this->apellido = $apellido;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getSexo() {
			return $this->sexo;
		}

		public function setSexo($sexo) {
			$this->sexo = $sexo;
		}

	
	}