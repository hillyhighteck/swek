//sandr's werk

<?php 

function priem($num){

	if ($num % 2 != 0 && $num % 3 != 0 && $num % 5 != 0 && $num % 7 !=0 && $num != 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7) {
		echo $num . " is een getal<br>";	}
}
for ($i=1; $i <= 10000; $i++) { 
	priem($i);
}
?>