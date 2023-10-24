<?php
	if($_POST['user']=="yoyis" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nickname"] = "yoyis";
		header("Location: main.php");
	}else	if($_POST['user']=="German" && $_POST['pass']=="12345"){
		session_start();
		$_SESSION["usuario"] = "German";
		$_SESSION["nickname"] = "germnacito";
		header("Location: main.php");
	}else	if($_POST['user']=="Jony" && $_POST['pass']=="secretario"){
		session_start();
		$_SESSION["usuario"] = "jony";
		$_SESSION["nickname"] = "elJony";
		header("Location: main.php");
	}else	if($_POST['user']=="eder" && $_POST['pass']=="4321"){
		session_start();
		$_SESSION["usuario"] = "eder";
		$_SESSION["nickname"] = "puesel";
		header("Location: main.php");
	}else{

		header("Location: error.php");
	}
?>

