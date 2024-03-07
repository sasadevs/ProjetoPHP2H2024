<?php 
	$data = '06 de março de 2024';
	$salario = 850;
	$cargo = "Estagiário";
 	$resultado = true;

 	if ($resultado) {
 		echo('Verdadeiro <br />');
 	 
 	}

 		echo ("Arquivo criado em $data");

 		printf("<br />Salario mínimo: R$ %.2f <br />", $salario);

 		$texto = sprintf("%s recebe R$ %2f por mes ", $cargo, $salario * 2);

 		echo ($texto);
 ?>