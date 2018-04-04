<?php


class Html{

    public function head(){
        echo "<html><head>";
        //Contenido del head
        echo "</head>";
    }

    public function openBody(){
        echo "<body>";
    }

    public function closeBody(){
        echo "</body>";
    }

    public function foot(){
        echo "</html>";
    }
}
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

$html = new Html();
$html->head();
$html->openBody();
$obj = new ClaseEjemplo();
$obj2 = new ClaseEjemplo();
$obj3 = new ClaseEjemplo();
$obj4 = new ClaseEjemplo();
$obj5 = new ClaseEjemplo();

$obj->setNombre("Juan");
$obj2->setNombre("Pepe");
$obj3->setNombre("Laura");
$obj4->setNombre("David");
$obj5->setNombre("Eder");

echo nl2br("1: ".$obj->getNombre()."\n");
echo nl2br("2: ".$obj2->getNombre()."\n");
echo nl2br("3: ".$obj3->getNombre()."\n");
echo nl2br("4: ".$obj4->getNombre()."\n");
echo "5: ".$obj5->getNombre();

$html->closeBody();
$html->foot();

?>
