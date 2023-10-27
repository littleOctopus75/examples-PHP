<?php
	if($_POST['user']=="littleoctopus" && $_POST['pass']=="contraseña"){
		session_start();
		$_SESSION["usuario"] = "Euclides";
		$_SESSION["nickname"] = "littleoctopus";
		header("Location: ../index.php");
	}else{

		header("Location: error.php");
	}
?>

