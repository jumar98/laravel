<?php

const host = "localhost";
const user = "root";
const pass = "";
const dataBase = "chat";


class Conexion {
    public $host = "";
    public $dataBase = "";
    public $pass = "";
    public $user = "";
    public $conexion;

    public function __construct($host,$user,$pass,$dataBase)
    {
        $this->host = $host;
        $this->dataBase = $dataBase;
        $this->pass = $pass;
        $this->user = $user;
    }

    public function conectar(){
        $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->dataBase);
    }
}

$objCon = new Conexion(host,user,pass,dataBase);
$objCon->conectar();