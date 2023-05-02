<?php 

	$units  = 400;
	$Amount = 0;

	if ($units <= 100) {
		echo $Amount = $units * 5;
	}
	elseif ($units <= 200 ) {
		echo $Amount = 100 * 5 + ($units - 100) * 10;
	}
	elseif ($units > 200 && $units <= 300) {
		echo $Amount = 100 * 5 + 100 * 10  + ($units - 200) * 15;
	}
	elseif ($units >= 400) {
		echo $Amount = 100 * 5 + 100 * 10 + 100 * 15  + ($units - 300) * 25;
	
	}

 ?>