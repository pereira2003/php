<?php 
//$jsonContenido permite decodificar formatos json
$jsonContenido='[
    {"nombre":"Oscar", "apellido":"Uh"},
    {"nombre":"José", "apellido":"Pérez"}   

]';

$resultado= json_decode($jsonContenido);
//print_r($resultado);

//leemos la informacion con un ciclo
foreach($resultado as $persona){ 
    echo ($persona->nombre."".($persona->apellido)."<br>");
}

?>