<?php

$server = "localhost";
$usuario = "root";
$pass = "";
$nameBD = "php_mysql";

var_dump(PDO::getAvailableDrivers());

try{
    $obj_PDO = new PDO("mysql:host=$server;dbname=$nameBD",$usuario,$pass);
}catch(PDOException $e){
    echo "Fallo la conexion ".$e->getMessage();
}
?>