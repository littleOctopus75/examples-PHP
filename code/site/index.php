<?php
session_start();
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
		header("Location: error.php");
	}
    else{
        // Comment these lines to hide errors
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        //nos permite acceder a los directorios o archivos cercanos e instanciar una estructura

        //require 'session/login.php';
        //header("Location: session/login.php");
        require 'includes/config.php';
		require 'includes/functions.php';
		init();
    // require session/logout.php
    }
