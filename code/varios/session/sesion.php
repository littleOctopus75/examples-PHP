<?php
	if($_POST['user']=="jonathan" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nickname"] = "jonathan";

		$_SESSION["autorizado"] = true;
        session_regenerate_id();
		header("Location: timeout.php");
		/*
		$_SESSION["nickname"] = "yoyis";
		header("Location: main_t.php");
		*/
	}else{

		header("Location: error.php");
	}
?>

