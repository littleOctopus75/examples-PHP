<?php
	if($_POST['user']=="yoyis" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nickname"] = "yoyis";
		require '../includes/config.php';
		require '<div class="">../includes/functions.php';
		init();
	}else{

		header("Location: error.php");
	}
?>

