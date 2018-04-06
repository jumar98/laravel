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

//$obj = new Hijo();
//$obj->metodoPadre();
//$obj->otroMetodo();

class Estatica {

    public static function metodoEstatico(){
        echo "<h1>Clase estatica</h1>";
    }
}

//Estatica::metodoEstatico();

class Calculadora{

    public function suma($valor1=0, $valor2=0){
        $result = $valor1 + $valor2;
        return $result;
    }
}

$operacion = new Calculadora();

echo "<h1>".$operacion->suma(5)."</h1>";