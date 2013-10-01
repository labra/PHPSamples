<html>
<head>
<meta charset="UTF-8">
<title>XML</title>
</head>
<body>
<?php

$fileName   = "pedido.xml";
$stylesheet = "pedido.xsl"; 

$doc = new DOMDocument();
$doc->load($fileName);

$xsl = new DOMDocument();
$xsl->load($stylesheet);

$xslProc = new XSLTProcessor();
$xslProc->importStylesheet($xsl);
 
$newDoc = $xslProc->transformToDoc($doc);
echo $newDoc->saveHTML();

?>
</body>
</html>