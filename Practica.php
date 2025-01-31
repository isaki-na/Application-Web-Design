<?php
class Persona { 
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {

    $this->nombre = $nombre;
    $this->edad = $edad;
    }
    private function definirNombre(){
        return $this->nombre;
    }
    public function saludar(){
        echo "<p>".$this->definirNombre()."</p>";
    }
}
$persona3 = new Persona("Awawawa",20);
$persona3->saludar();
$persona2 = new Persona("Awawo",21);
$persona2->saludar();
?>