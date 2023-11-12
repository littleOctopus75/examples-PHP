<?php

$_host = "localhost";
$_db = "company"; // 👍
//$_db = "compania"; // 👎
$_user = "root";
$_pass = "";

try {
    $_conection = new PDO('mysql:host='.$_host.'; dbname='.$_db, $_user, $_pass);

    //hellouda
    $stmt = $_conection->prepare("INSERT INTO test (id) VALUES (?)");
    $id = 1;
    $stmt->bindParam(1, $id); 
    $stmt->execute();

    echo "Connected successfully to MySQL database :D !!! 😊";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}
