<?php
include("./fichero_1.php");

use Foo\Bar\subespacio_de_nombres\foo;
use const Foo\Bar\subespacio_de_nombres\FOO;

$foo = new foo;
$foo::método_estático();
echo FOO; // se resuelve con la constante Foo\Bar\FOO

?>
