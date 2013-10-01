<html>
<head>
<meta charset="UTF-8">
<title>XML</title>
</head>
<body>
<?php

$fileName   = "pedido.xml";

$doc = new DomDocument();
$doc->load($fileName);

$expr = new DOMXPath($doc);
$nombres = $expr->query("//nombre");
foreach ($nombres as $n) {
 echo $n->nodeValue . "<br/>" ;
}

?>
</body>
</html>