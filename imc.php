<?php 

	$nome = "Mariana";
	$peso = 63.00;
	$altura = 1.67;


		function imc ($peso, $altura){
			$imc = $peso / ($altura * $altura);

			return $imc;

		}


		$resp = imc ($peso, $altura);

		printf ("Olá! $nome seu peso é $peso kg , sua altura é $altura m e seu IMC é: %.2f " , $resp);



 ?>