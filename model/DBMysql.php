<?php		
    class DBMysql {
		static function connection($user, $password) {
			$remote = "localhost";
					$dbname = "mayorista";
					try  {
						$pdo = new mysqli($remote , $user, $password, $dbname);
					} catch(Exception $e) {                    
						return null;
					}
					return $pdo;
		}
			
		static function consulta($user, $password, $query) {
				try {						
					$connection = DBMysql::connection($user, $password);
					$resultado = $connection->query($query);
				} catch(Exception $e) {
					return null;
                } 
				$connection->close();								
				return $resultado;
		}
		
		static function loginExtranet($user, $password) {				
			$query = "SELECT user, password from mysql.user where user = '". $user ."' AND password = PASSWORD('". $password ."');";
			$resultado = DBMysql::consulta($user, $password, $query);
			
			if($resultado != null) {
				session_name("Mayorista");
				session_start(); 
				include("Cliente.class.php");
				
				$subquery = "SELECT * FROM cliente WHERE cuit = '". $user ."';";				
				$data = DBMysql::consulta($user, $password, $subquery);							
				if($data == null) {
					return false;
				}
				$array = $data->fetch_assoc();
				$Cliente = new Cliente($array['cuit'], $password, $array['apellido'], $array['nombre'], $array['sexo']);				
				$_SESSION['Cliente'] = serialize($Cliente);								
				return true;
			} else {
				return false;
			}							
		}
		
		static function loginIntranet($user, $password) {				
			$query = "SELECT user, password from mysql.user where user = '". $user ."' AND password = PASSWORD('". $password ."');";
			$resultado = DBMysql::consulta($user, $password, $query);
			
			if($resultado != null) {
				include("../comunes/session_start.php");
				include("../model/Empleado.class.php");
				
				$subquery = "SELECT c.dni, c.apellido, c.nombre, c.rol, ui.permisos FROM empleado c JOIN usuarios_intranet ui ON c.dni = ui.usuario WHERE  c.dni = '". $user ."';";				
				$data = DBMysql::consulta($user, $password, $subquery);							
				if($data == null) {
					return false;
				}
				$array = $data->fetch_assoc();
				$Empleado = new Empleado($array['dni'], $password, $array['apellido'], $array['nombre'], $array['rol'], $array['permisos']);
				$_SESSION['Empleado'] = serialize($Empleado);								
				return true;
			} else {
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