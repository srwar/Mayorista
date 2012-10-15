<?php	
	function randCode() {
		$DesdeLetra = "A"; 
		$HastaLetra = "z"; 
		$DesdeNumero = -1000; 
		$HastaNumero = 1000;
		$letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra))); 
		$numeroAleatorio = rand($DesdeNumero, $HastaNumero);	
		return md5($letraAleatoria.$numeroAleatorio);
	}
	
	function dejarEnSession() {		
		$_SESSION['LogOut'] = randCode();
	}
?>