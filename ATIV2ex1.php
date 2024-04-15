<?php 
//Sara e Daniel
	$nota1aluno1 =10;
	$nota2aluno1 =2;
 
	$nota1aluno2 =7;
	$nota2aluno2 =6;
 
	$nota1aluno3 =1;
	$nota2aluno3 =8;
 
	$nota1aluno4 =8;
	$nota2aluno4 =8;
 
	$nota1aluno5 =9;
	$nota2aluno5 =6;
 
	$nota1aluno6 =9;
	$nota2aluno6 =10;

	$aprov = 0;
	$exam = 0;
	$rep = 0;

 
	$div1 = ($nota1aluno1 + $nota2aluno1) / 2;
	$div2 = ($nota1aluno2 + $nota2aluno2) / 2;
	$div3 = ($nota1aluno3 + $nota2aluno3) / 2;
	$div4 = ($nota1aluno4 + $nota2aluno4) / 2;
	$div5 = ($nota1aluno5 + $nota2aluno5) / 2;
	$div6 = ($nota1aluno6 + $nota2aluno6) / 2;

 
	echo "A média das notas do 1° aluno é " . $div1 . "!<br>"; 
	echo "A média das notas do 2° aluno é " . $div2 . "!<br>";
	echo "A média das notas do 3° aluno é " . $div3 . "!<br>";
	echo "A média das notas do 4° aluno é " . $div4 . "!<br>";
	echo "A média das notas do 5° aluno é " . $div5 . "!<br>";
	echo "A média das notas do 6° aluno é " . $div6 . "!<br><br><br>";
 
	
 
	if ($div1 < 3) {
		echo "O Aluno n°1 Reprovado! <br>";
		}elseif ($div1 = 3 && $div1 < 7) {
			echo "O Aluno n°1 em Exame... <br>";
		} else {
			echo "O Aluno n°1 foi Aprovado! <br>";
	}

 
			if ($div2 < 3) {
		echo "O Aluno n°2 Reprovado! <br>";
		}elseif ($div1 = 3 && $div1 < 7) {
			echo "O Aluno n°2 em Exame... <br>";
		} else {
			echo "O Aluno n°2 foi Aprovado! <br>";
	}
 
 
			if ($div3 < 3) {
		echo "O Aluno n°3 Reprovado! <br>";
		}elseif ($div1 = 3 && $div1 < 7) {
			echo "O Aluno n°3 em Exame... <br>";
		} else {
			echo "O Aluno n°3 foi Aprovado! <br>";
	}
 
			
 
			if ($div4 < 3) {
		echo "O Aluno n°4 Reprovado! <br>";
		}elseif ($div1 = 3 && $div1 < 7) {
			echo "O Aluno n°4 em Exame... <br>";
		} else {
			echo "O Aluno n°4 foi Aprovado! <br>";
	}

 
			if ($div5 < 3) {
		echo "O Aluno n°5 Reprovado! <br>";
		}elseif ($div1 = 3 && $div1 < 7) {
			echo "O Aluno n°5 em Exame... <br>";
		} else {
			echo "O Aluno n°5 foi Aprovado! <br>";
 
	}	
 
			if ($div6 < 3) {
		echo "O Aluno n°6 Reprovado! <br>";
		}elseif ($div1 = 3 && $div1 < 7) {
			echo "O Aluno n°6 em Exame... <br>";
		} else {
			echo "O Aluno n°6 foi Aprovado! <br><br><br>";
	}
 
	
	if ($div1 > 7) {

		$aprov = $aprov + 1; }


		if ($div2 > 7) {
			$aprov = $aprov + 1; }

			if ($div3 > 7) {
				$aprov = $aprov + 1; }

				if ($div4 > 7) {
					$aprov = $aprov + 1; }

					if ($div5 > 7) {
						$aprov = $aprov + 1; }

						if ($div6 > 7) {
							$aprov = $aprov + 1;	}

 
	
	echo "O total de alunos aprovados é $aprov <br> <br> <br>";



		if ($div1 = 3 && $div1 < 7) {

		$exam = $exam + 1; }


		if ($div2  = 3 && $div2 < 7) {
			$exam = $exam + 1; }

			if ($div3  = 3 && $div3 < 7) {
				$exam = $exam + 1; }

				if ($div4  = 3 && $div4 < 7) {
					$exam = $exam + 1; }

					if ($div5  = 3 && $div5 < 7) {
						$exam = $exam + 1; }

						if ($div6  >= 3 && $div6 < 7) {
							$exam = $exam + 1;	}

 
	
	echo "O total de alunos em exame é $exam <br> <br> <br>";



		if ($div1 < 3) {

		$rep = $rep + 1; }


			if ($div2 < 3) {

			$rep = $rep + 1; }


				if ($div3 < 3) {

				$rep = $rep + 1; }


					if ($div4 < 3) {

					$rep = $rep + 1; }


						if ($div5 < 3) {

						$rep = $rep + 1; }


							if ($div6 < 3) {

							$rep = $rep + 1; }

		echo "O total de alunos reprovados é $rep <br> <br> <br>";


		$media = ($div1 + $div2 + $div3 + $div4 + $div5 + $div6) / 6;

		echo "A média da classe é: $media";

?>