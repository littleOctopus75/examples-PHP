
<?php
/**
 * 1. Muestra los números del 1 al 10
 */
}

/**
 * 2. Poner un hola mundo dentro de un html.
 */

/**
 * 3. POner una imagen en un img con la ruta de la imagen.
 */
echo "<img src='imgs\grogu.jpg' alt='Descripción de la imagen'>"."<br>";

/**
 * 4. Crear un select en HTML y poner los números del 1 al 10 como opciones.
 */
echo "<br>"."<select>";
for ($i = 1; $i <= 10; $i++) {
 echo "<option value='$i'>$i</option>";
}
echo "</select>"."<br>";

/**
 * 5. Muestra los números del 1 al 10
 */
echo "x ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
    for ($j = 1; $j <= 10; $j++) {
        echo ($i * $j) . " ";
    }
    echo "<br>";
}

?>