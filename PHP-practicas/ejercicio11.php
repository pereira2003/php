<?php 
//Creamos una condicion

if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    //suma
    $suma=$valorA+$valorB;
    //resta
    $resta=$valorA-$valorB;
    //Division
    $Division=$valorA/$valorB;
    //multiplicacion
    $multiplicacion=$valorA*$valorB;
    

    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$Division;
    echo "<br/>".$multiplicacion;

    if($valorA==$valorB){

        echo "El valor de A es igual a el valor de B <br/>";

        if($valorA==4){
            echo "El valor es 4 <br/>";
    }
   
}
if( ($valorA==$valorB) && ($valor==4)){
    echo "El valor de A es igual a B Y es un numero 4";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Arimeticas</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
     Valor A: 
     <input type="text" name="valorA" id="">
 <br/>
     Valor B:
     <input type="text" name="valorB" id="">
 <br/>
    <input type="submit" value="Calcular">

    </form>
</body>
</html>