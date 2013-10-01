<?php

 $doc = new DomDocument();
 $doc->load("alumnos.xml");

 $valida = $doc->schemaValidate("alumnos.xsd");
 if ($valida) echo "Es valido";
  else echo "No es valido";
  
?>