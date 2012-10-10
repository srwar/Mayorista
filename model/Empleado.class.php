<?php
	class Empleado {
		private $dni; 
		private $apellido;
		private $nombre;
		private $legajo;
		private $rol;
		
		function Empleado($dni, $apellido, $nombre, $legajo, $rol) {
                    $this->dni =  $dni;
                    $this->apellido = $apellido;
                    $this->nombre = $nombre;
                    $this->legajo = $legajo;
                    $this->rol = $rol;			
		}
		
		function getDni() {
			return $this->dni;
		}
		
		function getApellido() {
			return $this->apellido;
		}
		
		function getNombre() {
			return $this->nombre;
		}
		
		function getLegajo() {
			return $this->legajo;
		}
		
		function getRol() {
			return $this->rol;
		}
	}