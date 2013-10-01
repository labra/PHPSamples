<?php

 $doc = new DomDocument();
 $doc->load("alumnos.xml");

 nuevoAlumno($doc,23,'Sandra','Alonso');
 nuevoAlumno($doc,25,'Luis','Astorga');

 print $doc->saveHTML( ); 
 
 function nuevoAlumno($doc,$dni,$nombre,$apellidos) {
 
  $alumnos = $doc->getElementsByTagName('alumnos');
 
 
  $alumno = $doc->createElement('alumno');

  
  $nodeNombre = $doc->createElement('nombre');
  $nodeNombre->nodeValue = $nombre;
 
  $nodeApells = $doc->createElement('apellidos');
  $nodeApells->nodeValue = $apellidos;

  $alumno->appendChild($nodeNombre);
  $alumno->appendChild($nodeApells);
  $alumno->setAttributeNode(new DOMAttr('dni',$dni));

  $alumnos->item(0)->appendChild($alumno); 
  
 }
 ?>