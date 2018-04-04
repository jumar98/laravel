<?php

class MiClase
    {

    public $nombreClase = "Owner";

    public function __construct()
    {
        $nombre = "Julian";
        echo nl2br("Hola MiClase Poo, por $nombre \n");
        echo $this->nombreClase;    //Llamamos propiedad de la clase
    }

    }

$a = new MiClase();

?>