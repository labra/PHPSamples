<html>
<head>
 <title>Hola</title>
</head>
<body>
<h1>Fecha: <?= date("d.m.y")?></h1>
<?php
if (date ("d") % 2 == 0) {
	echo "Hoy es un par";
} else {
	echo "Hoy es un impar";
}
?>
</body>
</html>
