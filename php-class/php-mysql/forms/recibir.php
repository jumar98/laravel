<?php

class Sistema{
    public function __construct(){
        echo "Post: ".$_POST["formName"]."<br>";
        echo "Get: ".$_GET["edad"]."<br>";
        echo "Inicia archivo recibir";
    }

}

$objSistema = new Sistema();