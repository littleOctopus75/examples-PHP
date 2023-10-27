<?php
	if($_POST['user']=="littleoctopus" && $_POST['pass']=="contraseña"){
		session_start();
		$_SESSION["usuario"] = "Euclides";
		$_SESSION["nickname"] = "littleoctopus";
		require '../includes/config.php';
		require '../includes/functions.php';
		init();
	}else{

		header("Location: error.php");
	}
?>

