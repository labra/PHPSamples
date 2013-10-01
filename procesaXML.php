<html>
<head>
<meta charset="UTF-8">
<title>XML</title>
</head>
<body>
<?php

$fileName   = "pedido.xml";
$schemaFile = "pedido.xsd"; 

$doc = new DomDocument();
$doc->load($fileName);

if ($doc->schemaValidate($schemaFile)) 
	echo "Válido";
else  
	echo "No Válido";

?>
</body>
</html>