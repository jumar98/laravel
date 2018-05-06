<?php
$server = "localhost";
$usuario = "root";
$pass = "";
$nameBD = "php_mysql";

$conexion = new mysqli($server,$usuario,$pass,$nameBD);
echo "tipo de variable: ".gettype($conexion)."<br>";
echo "contenido de variable"."<br>";
var_dump($conexion);