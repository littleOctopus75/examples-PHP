<?php

$_host = "localhost";
$_db = "company"; // 👍
//$_db = "compania"; // 👎
$_user = "root";
$_pass = "";

$_conection = new mysqli($_host,$_user,$_pass,$_db);

if($_conection->connect_errno){
    echo "Error: ". $_conection->connect_error;
}

echo "Connected successfully to MySQL database :D !!! 😊";
mysqli_close($_conection);