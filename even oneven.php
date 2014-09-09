<?php 
function check($num){
	while ($num >= 2) {
		$num = $num % 2;
	}
if ($num == 1) {
	return "is oneven<br>";
} else {
	return "is even<br>";
}

}

for ($i=1; $i <= 100; $i++) { 
	echo $i ." ". check($i);
}


 ?>