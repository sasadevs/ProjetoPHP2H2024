<?php 

// DUPLA: Sara Chaves e Daniel Alves


	$num1 = 100;

	if($num1 % 10 == 0){

		echo "O número " . $num1 . " é divisível por 10. <br />";

		if($num1 % 5 == 0){

			echo "O número " . $num1 . " é divisível por 5. <br />";

			if($num1 % 2 == 0){

			echo "O número " . $num1 . " é divisível por 2. <br />";
		}

			

		}
	}else{

		echo "O número " . $num1 . " não é divisível por nenhum destes.";
	} 


 ?>