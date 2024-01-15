<?php 

// Datos de la conexion
$servidor="127.0.0.1"; // 127.0.0.1
$usuario="root";
$contrasenia="";
//probamos que no hay errores
try{
// clase de conexion
$conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia );
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando la programacion', 'foto.jpg');";
//Usamos un metodo de PDO
$conexion->exec($sql);
echo "Conexión establecida";

}catch(PDOException $error){
echo "Conexión erronoea";
}
?>