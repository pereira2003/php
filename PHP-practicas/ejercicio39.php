<?php 

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola,Saludos";
//creamos un archivo en modo fopen
$archivoCrear= fopen($contenidoArchivo,"w");

fwrite($archivoCrear,"$contenidoArchivo");
fclose($archivoCrear);
?>