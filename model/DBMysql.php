<?php		
    class DBMysql {	
		static function connection() {
			$user = "root";
			$password = "";
			$dbname = "mayorista";
			$remote = "localhost";					
			try  {
				$link = new mysqli($remote , $user, $password, $dbname);
			} catch(Exception $e) { 
                                echo $e.getMessage();
				throw new Exception;
			}
			return $link;
		}
			
		static function consulta($query) {
				try {
					$connection = DBMysql::connection();
					$resultado = $connection->query($query);
				} catch(Exception $e) {
                                        echo $e.getMessage();
					throw new Exception;
                                } 
				$connection->close();								
				return $resultado;
		}
		
		static function loginExtranet($user, $password) {
            try {
				$query = "SELECT 1 from usuarios_extranet WHERE usuario = '". $user ."' AND contrasena = '". $password ."';";
				$resultado = DBMysql::consulta($query);			
					if($resultado != null) {
						$subquery = "SELECT * FROM cliente WHERE cuit = '". $user ."';";
						$data = DBMysql::consulta($subquery);							
						if($data == null) {
							return false;                                
						}
						include_once '../comunes/session_start.php';
						include_once "Cliente.class.php";
						$array = $data->fetch_assoc();
						$Cliente = new Cliente($array['cuit'], $password, $array['apellido'], $array['nombre'], $array['sexo']);				
						$_SESSION['Cliente'] = serialize($Cliente);								
						return true;
				} else {
					return false;
				}
            } catch (Exception $e) {	
				echo $e.getMessage();	
				return false;	
            }	
		}
		
		static function loginIntranet($user, $password) {
			try {
				$query = "SELECT 1 from usuarios_intranet WHERE usuario = '". $user ."' AND contrasena = '". $password ."';";
				$resultado = DBMysql::consulta($query);
				if($resultado != null) {									
					$subquery = "SELECT c.dni, c.apellido, c.nombre, c.rol, ui.permisos FROM empleado c JOIN usuarios_intranet ui ON c.dni = ui.usuario WHERE  c.dni = '". $user ."';";				
					$data = DBMysql::consulta($subquery);							
					if($data == null) {
						return false;
					}
					include("../comunes/session_start.php");
					include("../model/Empleado.class.php");					
					$array = $data->fetch_assoc();
					$Empleado = new Empleado($array['dni'], $password, $array['apellido'], $array['nombre'], $array['rol'], $array['permisos']);
					$_SESSION['Empleado'] = serialize($Empleado);								
					return true;
				} else {
					return false;
				}
			} catch(Exception $e) {
				echo $e.getMessage();	
				return false;
			}
		}
		
		static function isLoggerCliente() {			
			if(isset($_SESSION['Cliente']) )
				return true;
			else 
				false;
		}
		
		static function isLoggerEmpleado() {			
			if(isset($_SESSION['Empleado']))
				return true;
			else 
				false;
		}
    }