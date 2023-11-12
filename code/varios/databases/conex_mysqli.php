<?php

$_host = "localhost";
$_db = "company"; // 👍
//$_db = "compania"; // 👎
$_user = "root";
$_pass = "";
$_host = "127.0.0.1";
$_puerto = 3306;

$_conection = new mysqli($_host,$_user,$_pass,$_db, $_puerto);

if($_conection->connect_errno){
    echo "Error: ". $_conection->connect_error;
}

echo "Connected successfully to MySQL database :D !!! 😊";

echo $_conection->host_info . " uwu 😊 \n";


if (!$_conection->query("DROP TABLE IF EXISTS test") || !$_conection->query("CREATE TABLE test(id INT)")){
    echo "Fallo";
}


mysqli_close($_conection);