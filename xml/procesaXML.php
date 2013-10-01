<?php

 $doc = new DomDocument();
 $doc->load("alumnos.xml");
 $xpath = new DOMXPath($doc);
 $alumnos = $xpath->query("//alumno/nombre");
 
 foreach ($alumnos as $a)
  echo $a->nodeValue . " ";
 
?>