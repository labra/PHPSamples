<?php

$lista = array("Pepe","Juan");

$doc = new DOMDocument("1.0");
 
$alumnos = $doc->appendChild($doc->createElement('alumnos')); 

foreach ($lista as $n) {
	$alumno = $alumnos->appendChild($doc->createElement('alumno'));
	$nombre = $alumno->appendChild($doc->createElement('nombre'));
	$nombre->appendChild($doc->createTextNode($n));
}

 header("Content-type: text/xml");
 echo $doc->saveXML();
?>