<?php
/**
 * 1. Muestra los números del 1 al 10
 */
for ($i=1;$i <= 10; $i++){
    echo $i;
}
echo "<br>";
/**
 * 2. Poner un hola mundo dentro de un html.
 */
echo "<h1> Hola </h1><br>";
/**
 * 3. Poner una imagen en un img con la ruta de la imagen. en lugar de poner el texto plano de la url debe de ser un echo imprimiendo una variable
 */
$ruta="imagenes/dino.jpg";
echo "<img src=$ruta alt=\"error 3.14\" width=\"480\" height=\"380\" /> ";
echo"<br>";
/**
 * 4. Crear un select en HTML y poner los números del 1 al 10 como opciones.
 */
echo "<select name=\"select\">";
for($i=1; $i<=10; $i++){
    echo"<option value=\"value$i\">Opcion $i</option>";
}
echo"</select>";

echo"<br>";
/**
 * 5. Muestra los números del 1 al 10
 */
for ($i=1; $i<=10; $i++){
    echo"   $i   ";
    for ($x=1; $x<=10; $x++){
        echo"   ", $i*$x, "    ";
    }
    echo"<br>";
}
?>