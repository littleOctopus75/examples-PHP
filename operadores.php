<?php

    echo "<br>Aritméticos <br><br>";
    $x = 10; 
    $y = 6;
    echo ($x + $y); // salida 16
    echo "<br>";
    echo ($x- $y); // salida 4
    echo "<br>";
    echo ($x * $y); // salida 60
    echo "<br>";
    echo ($x / $y); // salida 1.6666666666667
    echo "<br>"; 
    echo ($x % $y); // salida 4     

    echo "<br><br> Asignación <br><br>";
    $x = 10; 
    echo $x; // salida 10
    echo "<br>";
    $y = 20; 
    $y += 100;
    echo $y; // salida 120
    echo "<br>";
    $z = 50;
    $z -= 25;
    echo $z; // salida 25
    echo "<br>";
    $i = 5;
    $i *= 6;
    echo $i; // salida 30
    echo "<br>";
    $j = 10;
    $j /= 5;
    echo $j; // salida 2
    echo "<br>";
    $k = 15;
    $k%= 4;
    echo $k; // salida 3

    echo "<br><br> Comparación <br><br>";
    $x = 100; 
    $y = "100";
    var_dump ($x == $y);
    echo "<br>";
    var_dump ($x === $y);
    echo "<br>";
    var_dump ($x != $y);
    echo "<br>";
    var_dump ($x !== $y);
    echo "<br>";
    $a = 50;
    $b = 90;
    var_dump ($a > $b);
    echo "<br>";
    var_dump ($a < $b);


    echo "<br><br> Incremento y decremento <br><br>";
    $x = 10; 
    echo ++ $x; // salida 11
    echo "<br>";
    $y = 10; 
    echo $y ++; // salida 10
    echo "<br>";
    $z = 5;
    echo - $z; // salida 4
    echo "<br>";
    $i = 5;
    
    echo "<br><br> Cadenas <br><br>";
    $a = "Hola";
    $b = $a." mundo";
    echo $b; // salida ¡Hola mundo! 
    echo "<br>";
    $x = "¡Hola";
    $x .= " mundo!";
    echo $x; // salida ¡Hola mundo! 

    echo "<br><br> Arrays <br><br>";
    $x = array("a" => "rojo", "b" => "verde"); 
    $y = array("c" => "azul", "d" => "amarillo"); 
    $z = $x + $y; // $x y $y combinación de matrices
    var_dump ($z);
    echo "<br>";
    var_dump ($x == $y);
    echo "<br>";
    var_dump ($x === $y);
    echo "<br>";
    var_dump ($x != $y);
    echo "<br>";
    var_dump ($x <> $y);
    echo "<br>";
    var_dump ($x !== $y);

?>