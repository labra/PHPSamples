<html>
<head>
<title>Simple web with embedded HTML</title>
</head>
<body>
<h1>Today is <?= date("d.m.y") ?></h1>

<ul>
<?php

function dobla($x) {
 return (2*$x);
}

foreach (array(1,2,3,4,5) as $a) {
 $d = dobla($a) ;
 echo "<li>2 * $a = $d</li>" ;
}
?>
</ul>
</body>