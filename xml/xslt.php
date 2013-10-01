<?php

 $doc = new DomDocument();
 $doc->load("alumnos.xml");

 $xsl = new DOMDocument();
 $xsl->load("alumnos.xsl");

 $xsltproc = new XSLTProcessor();
 $xsltproc->importStylesheet($xsl);
 
 $newDoc = $xsltproc->transformToDoc($doc); 

 $newDoc->save("salida.html");

?>