<?php
	if($_POST['user']=="jonathan" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nickname"] = "jonathan";

		$_SESSION["autorizado"] = true;
        session_regenerate_id();

		header("Location: timeout.php");
	}else{

		header("Location: error.php");
	}
?>

