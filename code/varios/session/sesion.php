<?php
	if($_POST['user']=="jennpper" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nombre"] = "Jenn Cortes";
		$_SESSION["carrera"] = "Informatica";
		header("Location: ..//index.php");
	}else{

		header("Location: error.php");
	}
?>

