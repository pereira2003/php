<?php 
//Creamos una clase
class persona{


 public $nombre; // propiedades
private $edad;
protected$altura;
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
//Creamos una clase Hija
class trabajador extends persona{
    public $puesto;//nuevo propiedad
    public function presentarseComoTrabajador(){
        echo"Hola soy".$this->nombre."y soy un ". $this->puesto;
    }
}

$objTrabajador= new trabajador(); // instancia o creación de un objeto
$objTrabajador->asignarNombre("Abrahan Navarro"); // llamando un método
 $objTrabajador->puesto="Profesor";

 $objTrabajador->presentarseComoTrabajador();
?>