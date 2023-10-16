<?php
/**
 * 1. Muestra los números del 1 al 10
 */
    echo "<br><br> 1 BEGIN <br><br>";
    echo 'Hecho con while <br/>';
    $i = 1;
    while($i<=10){
        echo $i . ' ';
        $i++;
    }
    echo '<br/>';
    echo 'Hecho con for <br/>';
    for($i = 1;$i<=10;$i++){
        echo $i . ' ';
    }
    echo "<br><br> 1 END <br><br>";
    echo "<hr>";

/**
 * 2. Poner un hola mundo dentro de un html.
 */
    echo "<br><br> 2 BEGIN <br><br>";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            echo 'Hola mundo';
        ?>
    </body>
    </html>

<?php

    echo "<br><br> 2 END <br><br>";
    echo "<hr>";
/**
 * 3. POner una imagen en un img con la ruta de la imagen.
 */
    echo "<br><br> 3 BEGIN <br><br>";
    $ruta = "./imgs/theElePHPant.png";
    ?>

    <img src=" <?php echo $ruta; ?> ">
<?php
    echo "<br><br> 3 END <br><br>";
    echo "<hr>";

/**
 * 4. Crear un select en HTML y poner los números del 1 al 10 como opciones.
 */
    echo "<br><br> 4 BEGIN <br><br>";
?>
    <select>
    <?php

    for ($i=1; $i <= 10 ; $i++) {
        echo '<option value="'.$i.'">'.$i.'</option>';
    }

    ?>
    </select>
<?php

    echo "<br><br> 4 END <br><br>";
    echo "<hr>";

/**
 * 5. Muestra los números del 1 al 10
 */
    echo "<br><br> 5 BEGIN <br><br>";
    echo '<table border=1>';

    // Cabecera (1º fila)
    echo '<tr>';
    echo '<td>X</td>';

    for ($i=1; $i <= 10; $i++) { 
        echo '<td>';
        echo $i;
        echo '</td>';
    }

    echo '</tr>';

    // contenido

    //columna vertical
    for ($i=1; $i <= 10; $i++) { 
        echo '<tr>';
        echo '<td>';
        echo $i;
        echo '</td>';

        //calculo tabla multiplicar
        for ($j=1; $j <= 10; $j++) { 

            echo '<td>';
            echo $i * $j;
            echo '</td>';

        }

        echo '</tr>';
    }

    echo '</table>';    
    echo "<br><br> 5 END <br><br>";
    echo "<hr>";

?>