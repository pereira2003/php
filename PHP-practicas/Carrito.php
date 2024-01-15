<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
    <style>
        .producto { border: 1px solid #000; margin-bottom: 10px; padding: 10px; }
        .producto button { background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; }
    </style>
</head>
<body>
    <?php
    session_start();

    $productos = array(
        "1" => array("nombre" => "Camisa", "precio" => 10),
        "2" => array("nombre" => "Pantalon", "precio" => 20),
        "3" => array("nombre" => "Sueter", "precio" => 15)
    );

    if(isset($_GET['agregar'])) {
        $id_producto = $_GET['agregar'];
        if(isset($_SESSION['carrito'][$id_producto])) {
            $_SESSION['carrito'][$id_producto]['cantidad']++;
        } else {
            $_SESSION['carrito'][$id_producto] = array("cantidad" => 1, "nombre" => $productos[$id_producto]['nombre'], "precio" => $productos[$id_producto]['precio']);
        }
    }

    if(isset($_GET['eliminar'])) {
        $id_producto = $_GET['eliminar'];
        if(isset($_SESSION['carrito'][$id_producto])) {
            unset($_SESSION['carrito'][$id_producto]);
        }
    }

    echo "<h2>Productos</h2>";
    foreach($productos as $id => $producto) {
        echo "<div class='producto'>";
        echo $producto['nombre']. " - ". $producto['precio']. " <a href='?agregar=".$id."'><button>Agregar al carrito</button></a>";
        echo "</div>";
    }

    echo "<h2>Carrito</h2>";
    if(isset($_SESSION['carrito'])) {
        foreach($_SESSION['carrito'] as $id => $producto) {
            echo $producto['nombre']. " - ". $producto['precio']. " x ". $producto['cantidad']. " <a href='?eliminar=".$id."'><button>Eliminar del carrito</button></a><br/>";
        }
    }
    ?>
</body>
</html>
