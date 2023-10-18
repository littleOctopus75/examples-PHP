<?php

function saludos() {
    echo "<strong> Hi!, I'm a function !!! </strong> <br>";
}
saludos();

function mostrarTexto($texto) {
    echo "<strong>El texto a mostrar es el siguiente: </strong>";
    echo $texto;
}
mostrarTexto("Funciones con PHP !!!");


function sumar($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}
$resultado_de_suma = sumar(20, 7);
echo " <br> La suma de 20 y 7 es ".$resultado_de_suma;



function foo()
{
    function bar()
    {
        echo "<br>No existo hasta que se llame a foo().<br>";
    }
}
foo();
bar();

?>