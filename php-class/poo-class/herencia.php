<?php

class SerVivo{
    
    public function respirar(){
        echo "<br> Estoy respirando";
        $this->metodo_privado();
    }

    private function metodo_privado(){
        echo "<br> Solo desde la misma clase";
    }

    protected function metodo_compartido(){
        echo "<br> Soy un merodo compartido";
    }
}

class SerHumano extends SerVivo{

    public function razonar(){
        echo "<br> Pensando....";
        $this->metodo_compartido();
    }
}

$obj = new SerVivo();

$objHuman = new SerHumano();
$objHuman->razonar();
//$objHuman->razonar();
//$objHuman->respirar();