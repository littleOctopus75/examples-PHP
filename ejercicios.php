/**
 * 1. Muestra los números del 1 al 10
 */
    <br>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i . " ";
        }
    ?>
    <br>
    <br>
/**
 * 2. Poner un hola mundo dentro de un html.
 */
    <br>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            echo "Hola Mundo"
        ?>
    </body>
    </html>
    <br>
    <br>

/**
 * 3. Poner una imagen en un img con la ruta de la imagen.
 */
    <br>
        <?php
        $rutaRelativa = 'imgs/theElePHPant.png'; //ruta relativa
        $rutaAbsoluta = 'C:/Users/jonny/Pictures/foto.jpg'; //ruta absoluta
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title></title>
        </head>
        <body>
            <img src="<?php echo $rutaRelativa; ?>" alt="foto ejercicio 3 php">
        </body>
        </html>
    <br>
    <br>
    
/**
 * 4. Crear un select en HTML y poner los números del 1 al 10 como opciones.
 */

    <br>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <select>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </body>
    </html>
    <br>
    <br>


/**
 * 5. Muestra los números del 1 al 10
 */


    <br>
    <?php
        echo "<table border='1'>";

        echo "<tr>
        <td></td>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>$i</td>";
        }
        echo "</tr>";

        // Contenido de la tabla
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$i</td>";
            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;
                echo "<td>$resultado</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    ?>



