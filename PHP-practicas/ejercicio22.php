<?php 

$frutas=array( "f"=>"fresa","m"=>"manzana","p"=>"pera");

print_r($frutas);

echo $frutas["m"]."<br/>";

//leer el arreglo

  foreach ($frutas as $indice=>&$valor){
    echo "El valor ".$valor."Tiene el índice:".$indice."<br/";

   
  }


?>