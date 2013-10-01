<?php
 if (isset($_GET['formato'])) {
 switch ($_GET['formato']) { 
    case 'xml': 
      header('Content-type: application/xml');
     echo "<alumno id='23'><nombre>Pepe</nombre></alumno>";
     break;
    case 'json':
      header('Content-type: text/json');
      echo '{ "id": 23 , "nombre": "Pepe" }';
      break;
    default:
      header('Content-type: text/html');
      echo "<html><h1>Pepe</h1></html>";
      break;
  } 
 } else {
   echo "<h1>Invocar con <code>?formato=[xml,json,...]</code></h1>";
 }
 ?>
 
