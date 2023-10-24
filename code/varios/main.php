<?php
	 session_start();
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
		header("Location: error.php");
	}
?>

<h1> Aceptado ... :D </h1>
<?php
	echo "<h3>$_SESSION[usuario] </h3>";

	//echo "<h1> $_SESSION["usuario"] <h1/>";
	echo "<br/>";
?>
<a href="logout.php">Cerrar</a>
