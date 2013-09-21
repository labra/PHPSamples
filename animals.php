<?php

class Animal {
	
	function sonido() {
		echo "<?>";
	}
}

class Perro {
	function sonido() {
		echo "Guau!";
	}
}

class Gato {
	function sonido() {
		echo "Miau!";
	}
}

$pluto = new Perro ;
$mimi = new Gato ;

$animales = array($pluto,$mimi);
foreach ($animales as $animal) {
	$animal->sonido();
}
?>