<?php 
//mantener informacion pagina

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logueado";

echo "Sessión iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."estatus: ". $_SESSION["estatus"];


?>