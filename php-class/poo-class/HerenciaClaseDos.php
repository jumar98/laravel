<?php

class Padre{

    public function metodoPadre(){
        echo "Dentro de padre<br>";
    }
}

class Hijo extends Padre{

    public function metodoPadre() //Sobreescribimos el metodo heredado
    {
        echo "Dentro del hijo";
    }

    public function otroMetodo(){
        
    }
}

$obj = new Hijo();
$obj->metodoPadre();