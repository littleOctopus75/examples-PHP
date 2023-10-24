<?php
	 session_start();
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
		header("Location: error.php");
	}

	$inactividad = 10;
	if(isset($_SESSION["timeout"])){
		$sessionTTL = time() - $_SESSION["timeout"];
		if($sessionTTL > $inactividad){
			session_destroy();			
			header("Location: logout.php");
		}
			echo "<script>alert('".$session_TTL."')</script>";
	}

	$_SESSION["timeout"] = time();
?>

<h1> Aceptado ... :D </h1>

<a href="logout.php">Cerrar</a>
