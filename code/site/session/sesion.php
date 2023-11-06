<?php
	if($_POST['user']=="littleoctopus" && $_POST['pass']=="contraseña"){
		session_start();
		$_SESSION["usuario"] = "Euclides";
		$_SESSION["nickname"] = "littleoctopus";
		//$_SESSION["nombre"] = "Eder Euclides Dionsio Diaz";
		//$_SESSION["grupo"] = "712";
		header("Location: ../index.php");
	}else{

		header("Location: error.php");
	}
?>

