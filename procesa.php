<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	echo "<h1>Hola {$_POST['cliente']}</h1>";
	echo "<p>Email: {$_POST['correo']}</p>";
} else {
	die("Invocación incorrecta");
}
?>