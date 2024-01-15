<?php

class UnaClase{

    //creamos un metodo estatico
   public static function unMetodo(){
      echo "Hola soy un método estatico";
    }
}
//Creamos una objecto
    $obj =new UnaClase();
    $obj->unMetodo();
// Creamos una referencia 
    unaClase::unMetodo();
?>