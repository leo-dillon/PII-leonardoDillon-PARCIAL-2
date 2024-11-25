<?php
    require_once "./clases/Productos.php";
    $id = $_GET['id'] ?? FALSE;

    try{
        $producto = Producto::eliminarProducto($id);

    }catch (Exception $e){
        die("No se pudo borrar el producto.");
    }

    header('Location: ?sec=admin');

?>