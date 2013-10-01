<?php
function muestra($array,$nombre) {
	echo "<h1>$nombre</h1>";
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

muestra($_SERVER,"_SERVER");
muestra($_GET,"_GET");
muestra($_POST,"_POST");
muestra($_FILES,"_FILES");
muestra($_ENV,"_ENV");
muestra($_COOKIE,"_COOKIE");

?>