<?php
    echo "<h1>Hola mundo</h1><br>";
    $foo = 'Bob';
    $bar = &$foo;
    $bar = "Mi nombre es $bar";
    echo $bar."<br>";
    echo $foo."<br>";

    if($bar ===  $foo){
        echo TRUE."<br>";
    }

    $un_bool = TRUE;   // un valor booleano
    $un_str  = "foo";  // una cadena de caracteres
    $un_str2 = 'foo';  // una cadena de caracteres
    $un_int  = 12;     // un número entero

    echo gettype($un_bool)."<br>"; // imprime: boolean
    echo gettype($un_str)."<br>";  // imprime: string

    // Si este valor es un entero, incrementarlo en cuatro
    if (is_int($un_int)) {
        $un_int += 4;
    }

    echo $un_int."<br>";

    // Si $un_bool es una cadena, imprimirla
    // (no imprime nada)
    if (is_string($un_bool)) {
        echo "Cadena: $un_bool";
    }


    /**
     * Booleanos
     */
    $x = false;
    if($x)
    {
        echo $x."<br>";
    }
    echo var_dump($x)."<br>";

    /**
     * Interger
     */
    $a = 1234; // número decimal
    echo $a."<br>";
    $a = -123; // un número negativo
    echo $a."<br>";
    $a = 0123; // número octal (equivale a 83 decimal)
    echo $a."<br>";
    $a = 0x1A; // número hexadecimal (equivale a 26 decimal)
    echo $a."<br>";
    $a = 0b11111111; // número binario (equivale al 255 decimal)
    echo $a."<br>";

    /**
     * Float
     */
    $a = 1.234; 
    echo $a."<br>";
    $b = 1.2e3; 
    echo $b."<br>";
    $c = 7E-10;
    echo $c."<br>";
    $d = 1_234.567; // a partir de PHP 7.4.0
    echo $d."<br>";
    
    /**
     * String
     */
    $str='opcion 1 Comilla simple';
    echo $str."<br>";
    $str="opcion 2 Comilla doble";
    echo $str."<br>";
    $str = <<<EOD
    opcion 3
    Ejemplo de una cadena
    expandida en varias líneas
    empleando la sintaxis heredoc.
    EOD;
    echo $str."<br>";

    
    $nombre = "Carlos";
    echo <<<EOT
    Mi nombre es "$nombre".
    Esto debería mostrar una 'A' mayúscula: \x41
    EOT."<br>";


    /**
     * Arrays
     */

    $array_1 = array(
        "uno" => "1",
        "dos" => "2"
    );
    echo var_dump($array_1)."<br>";
    echo $array_1["uno"]."<br>";
    
    // a partir de PHP 5.4
    $array_2 = [
        "foo" => 100,
        20 => "dos"
    ];
    echo var_dump($array_2)."<br>";
    echo $array_2["foo"]."<br>";
    echo $array_2[20]."<br>";

    $array = array(5 => 10, 12 => 20);
    echo var_dump($array)."<br>";
    echo $array[5]."<br>";



?>