<?php
//encapsulacion
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
//herencia
class animal {
    public function saludar(){
        return "Hola soy un animal";
    }
}
class perro extends animal{
    public function hacerSonido(){
        return "Guaf guaf guaf guaf";
    }
}
$perrito = new perro();
echo "<p>".$perrito->saludar() ."</p>";
echo "<p>".$perrito->hacerSonido() ."</p>";

//metodos estaticos
class miClase{
    public static function metodosEstaticos(){
        return "Esta es una funcion estatica";
}
}
echo "<p>".miClase::metodosEstaticos() ."</p>";

$miobjeto = new miClase();

echo "<p>".$miobjeto->metodoEstatico()."</p>";

interface interfaceAnimal{
    public function Hablar();
    public function Gritar();
}
class ganado implements interfaceAnimal{
    public function saludo(){
        echo "<p>que royal</p>";
    }
    public function hablar(){
        echo "<p>Buenas tardes caballeros</p>"
    }
}
?>