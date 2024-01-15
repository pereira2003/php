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
$objAlumno= new persona(); // instancia o creación de un objeto
$objAlumno->asignarNombre("Oscar"); // llamando un método

$objAlumno2= new persona();
$objAlumno2->asignarNombre("Pedro");
$objAlumno2->imprimirNombre();

//llamamos el metodo edad
echo $objAlumno2->nombre;
echo $objAlumno2->mostrarEdad(); // private


echo $objAlumno->nombre; // imprimir una propiedad 
  
?>