<?php
	 session_start();
	// Establecer tiempo de vida de la sesión en segundos
	$inactividad = 10;
	// Comprobar si $_SESSION["timeout"] está establecida
	if(isset($_SESSION["timeout"])){
		// Calcular el tiempo de vida de la sesión (TTL = Time To Live)
		$sessionTTL = time() - $_SESSION["timeout"];
		if($sessionTTL > $inactividad){
			session_destroy();
			header("Location: error.php");
		}
	}
	$_SESSION["timeout"] = time();
?>

<h1> Aceptado ... :D </h1>

<a href="logout.php">Cerrar</a>
