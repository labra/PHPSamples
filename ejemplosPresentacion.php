<?php
header ( "content-type:text/html" );

function sep($msg = "") {
	echo "<hr>";
	if ($msg) { echo "<h3>$msg</h3>"; }
}

?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
sep ("heredoc");
$poema = <<< Fin
He olvidado todo el ritual,
he agotado todo el material,
y, mira, me da igual,
yo, de mayor quiero ser animal.
Fin;

echo "Poema: " . $poema;
$nombre = "juan";

echo "\nHola $nombre";
function search() {
	$res = database_connect ();
	database_query ( $res );
}

sep ("variables variables");

$uno = "saludo";
$$uno = "adios";
echo $saludo; // escribe "adios"

sep ("referencias");

$x = 1;
$r = & $x; // r es una referencia a x
$x = 2; // cambia el valor de x
echo $r; // imprime 2

sep ("ámbito");

$x = 1;
function cambia1() {
	$x = 2;
	echo $x; // imprime 2
}
cambia1 ();
echo $x; // imprime 1

sep ("declaración global");

$x = 1;
function cambia() {
	global $x;
	$x = 2;
}
cambia ();
echo $x; // imprime 2

sep ("variables estáticas");

$x = 10;
function cuentaLlamadas() {
	static $x = 0;
	$x ++;
	echo "Llamada $x";
}

cuentaLlamadas (); // escribe Llamada 1
cuentaLlamadas (); // escribe Llamada 2
echo $x; // escribe 10

sep ("octales, hexadecimales, binarios");

$x = 0273; // equivale a 187
echo $x;
sep ();
$x = 0x23AF; // equivale a 9135
echo $x;
sep ();
$x = 0b1000001; // equivale a 65
echo $x;

sep ("constantes");
define('ALTURA_MAXIMA',200);

echo ALTURA_MAXIMA; // se referencian sin comillas

sep("type cast");

$n = 10;            // $n es integer
$b = (boolean) $n;  // $b es boolean
echo "Type cast:";
var_dump($n);
var_dump($b);

sep("if");

define ( 'sentencias', 10 );
define ( 'condición', false );
define ( 'valor1', 20 );
define ( 'valor2', 30 );

if (condición) {
	sentencias;
} else {
	sentencias;
}

if (condición) :
	sentencias;
 else :
	sentencias;
endif;

$usuario_válido = false;
echo $usuario_válido;

sep ("condición ?");
$x = condición ? valor1 : valor2;
echo $x;

switch ($nombre) {
	case 'Juan' : // sentencias
		break;
	case 'Luis' : // sentencias
		break;
	default : // sentencias
		break;
}

sep ("while");

$total = 0;
$i = 1;
while ( $i <= 10 ) {
	$total += $i;
	$i ++;
}
echo $total; // 55

sep ("do...while");

$total = 0;
$i = 1;
do {
	$total += $i;
	$i ++;
} while ( $i <= 10 );
echo $total; // 55

sep ("for");

$total = 0;
for($i = 0; $i <= 10; $i ++) {
	$total += $i;
}
echo $total; // 55

sep ("foreach");

$lista = array (
		1,
		2,
		3,
		4,
		5 
);
foreach ( $lista as $valor ) {
	echo $valor;
}

sep ("foreach 2");
$lista = array (
		"pepe" => 4,
		"luis" => 7,
		"juan" => 2 
);
foreach ( $lista as $clave => $valor ) {
	echo "$clave tiene un $valor";
}

sep ("excepciones");
function inverso($x) {
	if (! $x) {
		throw new Exception ( 'División por cero.' );
	}
	return 1 / $x;
}

try {
	echo inverso ( 5 ) . "\n";
	echo inverso ( 0 ) . "\n";
} catch ( Exception $e ) {
	echo 'Excepción capturada: ', $e->getMessage (), "\n";
}

sep("recursividad..factorial");

function fact($num) {
	if ($num == 0)
		return 1;
	elseif ($num > 0)
		return $num * fact ($num - 1);
	else
		throw new Exception ( "Argumento negativo" );
}

echo Fact(5); // 120

sep("Parámetros por valor");
$x = 1;            // variable global

function f($x) {
	$x++ ;         // variable local
}

f($x);
echo $x;          // imprime 1

sep("Parámetros por referencia");
$x = 1;            // variable global

function f1(&$x) {
	$x++ ;         // variable local
}

f1($x);
echo $x;          // imprime 1

sep("Parámetros por defecto");

function f2($x = "Juan") {
	echo "Hola $x" ;
}

f2("Luis"); // Hola Luis
f2();       // Hola Juan

sep("Parámetros variables");

function sumaArgumentos()
{
  $suma = 0;
  for ($i = 0; $i < func_num_args(); $i++) {
			$suma += func_get_arg($i);
		}
 return $suma;
}
echo sumaArgumentos(1, 5, 9); // 15
echo sumaArgumentos(1, 5);    // 6
echo sumaArgumentos();        // 0

sep("Parámetros con tipo");

class Animal {}
class Perro extends Animal {}
class Casa {}

function respira(Animal $a) {
 echo "Respirando " . get_class($a);
}

respira(new Animal);  // ok
respira(new Perro);   // ok
// respira(new Casa);    // error 

sep("Arrays");

$personas = array("juan","luis","ana");

print($personas[1]);    // luis

$personas[3] = "pepe";   // Inserta un valor en posición 3
$personas[] = "kiko";    // Inserta valor al final

foreach($personas as $p) {
	echo $p . " ";
}

$nota    = array("juan" => 5.5, "luis" => 8.5);

print($nota['luis']);  // 8.5

foreach($nota as $p => $n) {
	echo "$p tiene un $n";
}

sep("Arrays sin tipo");

$cosas = array("pepe",2,array(2,3));
echo "<pre>";
var_dump($cosas);
echo "</pre>";


sep("Arrays multidimensionales");

$matriz = array(array(4,5),
                array(8,2),
                array(3,6));

for ($i = 0; $i < count($matriz); $i++) {
 $fila = $matriz[$i]; 
 for ($j = 0; $j < count($fila); $j++) {
  echo "($i,$j)=$fila[$j] "; 
 }
 echo "<br/>";
}

sep("devolver 2 valores");

function devuelve2() {
 return array("Juan",23);
}


sep("funciones anónimas");

$suma = function($a,$b) { return $a + $b; };

echo $suma(2,3);

$lista = array("pepe","federico","juan","ana");

$filtro = array_filter($lista, function($n) { return (strlen($n) == 4); });
// filtro = pepe, juan

foreach ($filtro as $n) echo $n . ' ';
 
sep("POO");

class Persona {
 private $nombre, $edad;
 
 function __construct($nombre,$edad=0) {
 	$this->nombre= $nombre;
 	$this->edad  = $edad;
 }
 
 function envejecer() { $this->edad++; }
 function toString() {
 	return $this->nombre . ': ' . $this->edad . ' años';
 }
}


$juan = new Persona("Juan",23);
$juan->envejecer();
echo $juan->toString(); // Juan: 24 años

sep("Herencia empleados");

class Empleado extends Persona {
	private $empresa;
	function __construct($nombre,$edad,$empresa) {
		parent::__construct($nombre,$edad);
		$this->empresa = $empresa;
	}
}

$luis = new Empleado("Luis",34,"IBM");

$personas = array(new Persona("Ana",22),new Empleado("Luis",34,"IBM"));
foreach ($personas as $p) $p->envejecer();
foreach ($personas as $p) echo $p->toString() . "<br/>";

sep("Herencia");

abstract class Forma {
 private $x, $y;
 
 function __construct($x, $y) {
   $this->x = $x; $this->y = $y;
 }
 
 function mover($dx,$dy) {
  $this->x+=$dx;  $this->y+=$dy;
 }

 function getX() {  return $this->x; }
 function getY() { return $this->y; }
 
 abstract function area();
}

class Rectángulo extends Forma {
 private $base, $altura ;
 function __construct($base,$altura,$x=0,$y=0) {
  parent::__construct($x,$y);
  $this->base = $base;
  $this->altura = $altura;
 }
 function area() {
  return $base * $altura;
 }
}

class Círculo extends Forma {
	private $radio ;
	function __construct($radio,$x=0,$y=0) {
		parent::__construct($x,$y);
		$this->radio = $radio;
	}
	function area() {
		return pi() * pow($this->radio,2);
	}
}

$r = new Rectángulo(2,3);
$c = new Círculo(3);

$formas = array(new Rectángulo(3,4,1,1),new Círculo(2,1,1));

foreach ($formas as $f) $f->mover(3,4);
foreach ($formas as $f) print_r($f);

sep("Traits");

trait Saludo {
 function saluda($nombre) {
   echo "Hola $nombre! soy un " . 
        get_class($this);
 }
}

class Coche {
 use Saludo;
 // ... 
}

class Lápiz {
 use Saludo;
 // ...
}

$c = new Coche;
$a = new Lápiz;
$c->saluda("Pepe"); // Hola Pepe! soy un Coche
$a->saluda("Juan"); // Hola Juan! soy un Lápiz

sep("Constantes");

class MétodoPago
{
	const TARJETA_CREDITO = 'CREDITO';
	const CONTADO         = 'CONTADO';
}
echo MétodoPago::TARJETA_CREDITO;

sep("interfaces");

interface a {
  function a();
}

interface b {
	function b();
}

class AB implements a, b {
	function a() { echo "AB implementa a"; }
	function b() { echo "AB implementa b"; }
}

$ab = new AB;
$ab->a();


?>

<?php sep("sintaxis alternativa condicional"); ?>
<?php if ($usuario_válido) :?>
  <p>Usuario registrado</p>
<?php else: ?>
  <p>Usuario no válido</p>
<?php endif; ?>
</body>
</html>
