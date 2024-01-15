<?php

if($_POST){
// Recibir información del formulario HTML ( Método POST)
$nombre=$_POST['txtNombre'];
echo "Hola ".$nombre;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <!--get los muestra en la URL-->
<form action="ejercicio2.php" method="get">
Nombre:
<input type="text" name="txtNombre" id="">
<br/>
<input type="submit" value="Enviar">
form/> 
<boby/> 
html/>