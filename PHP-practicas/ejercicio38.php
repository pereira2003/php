<?php 
//abriendo un archivo para leer el contenido
$archivo="contenido.txt";
// abrimos el archivo en lectura
$archivoAbierto=fopen($archivo,"r");
//leemos el contenido
$contenido=fread($archivoAbierto, filesize($archivo));
//imprimimos
echo $contenido


?>