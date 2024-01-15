<?php 
//obtenemos datos
if($_POST){
    print_r($_POST);
//se utliza el nombre de input y la propiedad que queres aceder
    print_r($_FILES["archivo"]["name"]);
//movemos o copiamos la funcion move_uploaded_file para obtener el archivo original y lo copiamos con el nombre  original
//se copiara en la misma carpeta
    move_uploaded_file($_FILES["archivo"]["tmp_name"],($_FILES["archivo"]["name"]),);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Abjuntar imagenes</title>
</head>
<body>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        imagen:
        <input type="file" name="archivo" id="">
        <br/>
        <input type="submit" name="enviar" value="Enviar informacion">
    </form>
</body>
</html>