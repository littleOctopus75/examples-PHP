<?php
	 session_start();
     // Establecer tiempo de vida de la sesión en segundos
     $inactividad = 10;
     // Comprobar si $_SESSION["timeout"] está establecida
     if(isset($_SESSION["timeout"])){
         // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
         $sessionTTL = time() - $_SESSION["timeout"];
         if($sessionTTL > $inactividad){
             session_destroy();
             header("Location: logout.php");
         }
     }
     // El siguiente key se crea cuando se inicia sesión
     $_SESSION["timeout"] = time();

    
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
		header("Location: error.php");
	}
?>

<h1>La session se cerrara en 10 segundos papu :v</h1>
