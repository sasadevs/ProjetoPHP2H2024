<?php 

	$nome = "Mariana";
	$peso = 63.00;
	$altura = 1.67;


		function imc ($peso, $altura){
			$imc = $peso / ($altura * $altura);

			return $imc;

		}


		$resp = imc ($peso, $altura);


		if ($resp <= 18.5){

			echo "$nome você está abaixo do peso! <br />";
		} elseif ($resp >= 18.6 && $resp <= 24.9) {

			echo "$nome você está no peso ideal! <br />";

		} elseif ($resp >= 25.0 && $resp <= 29.9) {
			
			echo "$nome você está levemente acima do peso! <br />";
		} elseif ($resp >= 30.0 && $resp <= 34.9) {
			
			echo "$nome você está em obesidade grau I! <br />";
		} elseif ($resp >= 35.0 && $resp <= 39.9) {
			
			echo "$nome você está em obesidade grau II! (severa) <br />";
		} elseif ($resp >= 40.0){

			echo "$nome você está em obesidade III! (mórbida) <br />";
		}


		printf ("Seu peso é $peso kg, sua altura é $altura m e seu IMC é: %.2f " , $resp);



 ?>