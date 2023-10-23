Hola papu, tu nombre es <?php echo htmlspecialchars($_POST['nombre']); ?>.
<br>
Usted tiene <?php echo (int)$_POST['edad']; ?> años.
<br>
Su lenguaje favorito <?php echo htmlspecialchars($_POST['lenguaje']) ?>
<br>
Ya te hackie