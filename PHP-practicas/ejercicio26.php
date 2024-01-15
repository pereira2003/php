<?php 
//Creamos una clase
class persona{


 public $nombre; // propiedades
private $edad;
protected$altura;

 function __construct($nuevoNombre){

    $this->nombre=$nuevoNombre;
    }
    public function asignarNombre($nuevoNombre){ // acciones o métodos ...
    
    $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){

      echo "Hola soy ".$this->nombre;
    }
    //creamos un metod que altere los datos
   public function mostrarEdad(){
    $this->edad=20; 
    return $this->edad;
   }
}
$objAlumno= new persona("Abrahan Navarro"); // instancia o creación de un objeto
//$objAlumno->asignarNombre("Oscar"); // llamando un método
$objAlumno->imprimirNombre();// lamando al "metodo imprimirNombre"

?>