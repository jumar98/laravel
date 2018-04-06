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

    public function otroMetodo(){ // Llama metodo del padre
        parent::metodoPadre();
    }
}

$obj = new Hijo();
//$obj->metodoPadre();
$obj->otroMetodo();