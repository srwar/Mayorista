<?php
	class Empleado {
		private $dni;
		private $contrasena;
		private $apellido;
		private $nombre;		
		private $rol;
		private $permiso;
		
		function Empleado($dni, $contrasena, $apellido, $nombre, $rol, $permiso) {
                    $this->dni =  $dni;
                    $this->apellido = $apellido;
                    $this->nombre = $nombre;
                    $this->contrasena = $contrasena;
                    $this->rol = $rol;
					$this->permiso = $permiso;
		}
		
		public function getDni() {
			return $this->dni;
		}
		
		public function getApellido() {
			return $this->apellido;
		}
		
		public function getNombre() {
			return $this->nombre;
		}
		
		public function getContrasena() {
			return $this->contrasena;
		}
		
		public function getRol() {
			return $this->rol;
		}
		
		public function getPermiso() {
			return $this->permiso;
		}
		
		public function puedoEstarAqui($permiso) {
			if($permiso != $this->getPermiso()) {
				header("Location: index.php");
				exit();				
			}		
		}	
	}