<?php   #
	class ABMEmpleado {
		private $cuit;
		private $nombre;
		private $apellido;
		private $rol;
		private $sexo;		
		private $telefono;
		private $direccion;
		private $localidad;
				
                function __construct($cuit, $nombre, $apellido, $rol, $sexo, $telefono, $direccion, $localidad) {
                    $this->cuit = $cuit;
                    $this->nombre = $nombre;
                    $this->apellido = $apellido;
                    $this->rol = $rol;
                    $this->sexo = $sexo;
                    $this->telefono = $telefono;
                    $this->direccion = $direccion;
                    $this->localidad = $localidad;
                }

                public function getCuit() {
                    return $this->cuit;
                }

                public function setCuit($cuit) {
                    $this->cuit = $cuit;
                }

                public function getNombre() {
                    return $this->nombre;
                }

                public function setNombre($nombre) {
                    $this->nombre = $nombre;
                }

                public function getApellido() {
                    return $this->apellido;
                }

                public function setApellido($apellido) {
                    $this->apellido = $apellido;
                }

                public function getRol() {
                    return $this->rol;
                }

                public function setRol($rol) {
                    $this->rol = $rol;
                }

                public function getSexo() {
                    return $this->sexo;
                }

                public function setSexo($sexo) {
                    $this->sexo = $sexo;
                }

                public function getTelefono() {
                    return $this->telefono;
                }

                public function setTelefono($telefono) {
                    $this->telefono = $telefono;
                }

                public function getDireccion() {
                    return $this->direccion;
                }

                public function setDireccion($direccion) {
                    $this->direccion = $direccion;
                }

                public function getLocalidad() {
                    return $this->localidad;
                }

                public function setLocalidad($localidad) {
                    $this->localidad = $localidad;
                }		     
	}
?>        