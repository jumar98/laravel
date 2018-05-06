<?php
$server = "localhost";
$usuario = "root";
$pass = "";
$nameBD = "php_mysql";

$conexion = new mysqli($server,$usuario,$pass,$nameBD);

if($conexion->connect_errno){
    echo "Falló la conexion";
}else{
    echo "Conexion exitosa: ".mysqli_get_host_info($conexion);
}
echo "tipo de variable: ".gettype($conexion)."<br>";
echo "contenido de variable"."<br>";
var_dump($conexion);