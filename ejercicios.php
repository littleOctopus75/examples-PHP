<?php
/**
 * 1. Muestra los números del 1 al 10
 */
   for($limite = 0; $limite <= 10; $limite++) {
    echo $limite, "<br>";

   }
   /*2. Poner un hola mundo dentro de un html. y 4 select con php
 */ 
?>
<html>
    <head>
        <body>
            <?php
            echo "HOLA MUNDO :)<br>"; 
            ?>
            <select name="selected">
                <?php
                for($limite3 = 0; $limite3 <= 10; $limite3++) {
                    echo "<option>".$limite3."</option>";
                
                   }
                ?>
            </select>
        </body>
    </head>
</html>
<?php
/*********************************************
/**
 * 3. POner una imagen en un img con la ruta de la imagen.
 */
$imagen='imgs\theElePHPant.png';
echo "<br><img src=".$imagen.">","<br>"; 
?>
<?php
/**
 * 5. Muestra los números del 1 al 10
 */
for($limite1 = 0; $limite1 <= 10; $limite1++) {
    echo $limite1;
    for($limite2 = 0; $limite2 <= 10; $limite2++){
        
    }

   }

?>
