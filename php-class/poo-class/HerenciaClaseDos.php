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

    public function arreglo(){
        $arreglo = array("Valor 1","Valor 2","Valor 3","Valor 4");
        //echo $arreglo[0];
        $arreglo2 = array(1=>"posicion 1",2=>"posicion 2","tres"=>"posicion 3");
        //echo $arreglo2['tres'];
        $arreglo3[0]="posicion 0";
        $arreglo3[4]="posicion 4";
        echo $arreglo3[4];
    }

    public function suma($datos){
        $result = $datos[0] + $datos[1];
        return $result;
    }
}

$operacion = new Calculadora();
$arreglo = array(3,5);
echo $operacion->suma($arreglo);

//echo "<h1>".$operacion->suma(5)."</h1>";

?>