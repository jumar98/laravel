<?php

class ClaseEjemplo{

    private $nombre = "Julian"; // Restringe el propiedades para modificacion o acceso 
    
    public function __construct()
    {
        //echo nl2br("Hola mundo con clases \n");
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
}

$obj = new ClaseEjemplo();


echo nl2br("Nombre: ".$obj->getNombre()."\n");
$obj->setNombre("Pedro Juan");
echo "Nombre: ".$obj->getNombre();
