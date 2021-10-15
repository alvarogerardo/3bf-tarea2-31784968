<?php

	echo "N&uacutemeros pares del 1 al 10 con bucle for...";

	for ($i=0; $i <=10 ; $i+=2) { 
		if($i==10){
			echo " $i.";
		}else{
			echo " $i,";
		}
	}

	echo "<br><br>Lo mismo con bucle while...";

	$variable=0;
	while ($variable<=10) {
		if($variable==10){
			echo " $variable.";
		}else{
			echo " $variable,";
		}
		$variable+=2;
	}

?>