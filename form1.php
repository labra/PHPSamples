<html>
<head>
<meta charset="utf-8">
<title>Formulario</title>
</head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
     <label>Nombre:             <input name="cliente"></label><br>
     <label>Correo electrónico: <input name="correo" type="email"></label><br>
    <button>Enviar</button>
 </form>
<?php 
 elseif ($_SERVER['REQUEST_METHOD'] == 'POST') :
   echo "<h1>Hola {$_POST['cliente']}</h1>";
   echo "<p>Email: {$_POST['correo']}</p>";  
 else:
   die("This script only works with GET and POST requests.");
 endif ?>
</body>
</html>

