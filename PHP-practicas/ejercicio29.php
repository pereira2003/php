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
//llamamos las fotos
$sql="SELECT * FROM `fotos`";
//creamos uan instruccion
$sentencia= $conexion->prepare($sql);
$sentencia->execute();

//declaramos una variable
$resultado=$sentencia->fetchAll();

//print_r($resultado);

foreach($resultado as $foto){
    echo $foto["nombre"]."<br/>";
}
echo "Conexión establecida";

}catch(PDOException $error){
echo "Conexión erronoea";
}
?>