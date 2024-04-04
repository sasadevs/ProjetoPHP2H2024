<?php 

// DUPLA: Sara Chaves e Daniel Alves
	

	$altura1 = 1.65;
	$altura2 = 1.76;

	$idade1 = 18;
	$idade2 = 26; 

	$sexo1 = "Feminino";
	$sexo2 = "Feminino";

	if($altura1 > $altura2){

		echo "A maior altura é " . $altura1 . " e a menor altura é " . $altura2;
	}else{
			echo "A maior altura é " . $altura2 . " e a menor altura é " . $altura1;
		}

	

	
		$media = ($altura1 + $altura2) / 2;
		echo " <br />
		A média de altura de mulheres é " . $media; 

	


 ?>