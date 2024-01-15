<?php 
//inicializamos: $txtNombre  
$txtNombre="";
$rdgLenguaje="";
$chkphp= "";
$chkhtml="";
$chkcss= "";
$txtComentario= "";
//Creamos una condicion
if($_POST){

 $txtNombre= (isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
 $rdgLenguaje= (isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"";

 $chkphp=(isset($_POST["chkphp"])=="Si")?"checked":"";
 $chkhtml=(isset($_POST["chkhtml"])=="Si")?"checked":"";
 $chkcss=(isset($_POST["chkcss"])=="Si")?"checked":"";

 $lsAnime=(isset($_POST["lsAnime"]))?$_POST["lsAnime"]:"";

$txtComentario= (isset($_POST["txtComentario"]))?$_POST["txtComentario"]:"";
 print_r($lsAnime);
//instruciones de insertar
//rutina de algun calculo
//puede alterar esos valores para mostrar diferentes valores modificados
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de INPUT
    </title>
</head>
<body>
     <?php  if($_POST){?>
    <strong>Hola</strong>:<?php echo $txtNombre?>
    <br/>
    <strong>Tu lenguaje es</strong><?php echo $rdgLenguaje?>
    <br/>
     <!--verificamos-->
<strong> Estas aprendiendo: </strong><br/>
-<?php echo ($chkphp == "checked")?"PHP":"";?><br/>
-<?php echo ($chkhtml == "checked")?"HTML":"";?><br/>
-<?php echo ($chkcss == "checked")?"CSS":"";?><br/>
<br/>
<strong> Tu lenguaje es: </strong><?php echo $lsAnime;?>
<br/>
<strong>Tu mensaje es</strong><?php echo $txtComentario;?>
    <?php }?>
<!--Creamos un formulario-->
    <form action="ejercicio31.php" method="post">
      <!--Enviamos Informacion-->   
      Nombre :<br/>
<input value=" <?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
<br/>

¿Te gusta ?:<br/>
<br/> php: <input type="radio" <?php echo ($rdgLenguaje == "php")?"checked":"";?> name="lenguaje" value="php" id=""><br/>
<br/> html:<input type="radio" <?php echo ($rdgLenguaje == "html")?"checked":"";?> name="lenguaje" value="html" id=""><br/>
<br/> css:<input type="radio" <?php echo ($rdgLenguaje == "css")?"checked":"";?> name="lenguaje" value="css" id=""><br/>

Estas Aprendiendo... <br/>
<br/>php<input type="checkbox" <?php echo $chkphp; ?> name="chkphp"  value="si" id="">
<br/>html<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
<br/>css<input type="checkbox" <?php echo $chkcss;?>name="chkcss" value="si" id="">
  <br/>
Que Anime te gusta?... <br/>
<select name="lsAnime" id="">
    <option value="">Ninguna Serie</option>
    <option value="Naruto"<?php echo ($lsAnime== "Naruto")?"selected":""; ?>>Naruto</option>
    <option value="Gato"<?php echo ($lsAnime== "Gato")?"selected":""; ?>>Gato</option>
    <option value="Gumball"<?php echo ($lsAnime== "Gumball")?"selected":""; ?>>Gumball</option>
</select>
<br/>
Tienes alguna Duda?<br/>
 <!--recesionar el valor-->
<textarea name="txtComentario" id="" cols="30" rows="10">
    <?php echo $txtComentario;?>
</textarea>
<br/>
<!--Creamos un boton-->
    <input type="submit" value="Enviar Informacion">

    </form>
</body>
</html>