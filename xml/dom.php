<?php

 $doc = new DomDocument();
 $doc->load("alumnos.xml");

 $nombres = $doc->getElementsByTagName("nombre");

 foreach ($nombres as $nombre) 
  echo $nombre->nodeValue . " ";   
 
?>