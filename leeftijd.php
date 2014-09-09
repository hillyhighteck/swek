<?php
$leeftijd = $_GET["age"];

if ($leeftijd < 16) {
	echo "je mag niks";
} elseif ($leeftijd >= 16 && $leeftijd < 18) {
	echo "je mag scooter rijden";
} elseif ($leeftijd >= 18 && $leeftijd <21) {
	echo "je mag auto rijden";
} elseif ($leeftijd >= 21) {
	echo "je mag zware motoren rijden";
}


?>