<?php
    require_once "./clases/Productos.php";
    require_once "./componentes/productoTienda.php";
    require_once "./clases/Categorias.php";
    $categorias = Categoria::traerCategorias();
    $productos = Producto::traerProductos();
?>
<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="mb-4">Nuestra Tienda</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form action="#" method="GET" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar productos" aria-label="Buscar">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <h2 class="text-center mt-5">Categorias</h2>
            <div class="btn-group" role="group" aria-label="Filtrar por categoría">
                <?php foreach($categorias as $categoria){ ?>
                    <?=
                        "<a  class='btn btn-outline-secondary'>". $categoria["category_name"] ."</a>"
                    ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <hr class="mb-5">        
    <div class="row d-flex justify-content-center gap-4">
        <?php foreach($productos as $producto){ ?>
            <?=
                crearProductoTienda(
                    $producto["imagen"],
                    $producto["name"],
                    $producto["description"],
                    $producto["price"],
                    $producto["product_id"]
                );
            ?>
        <?php } ?>
    </div>

</div>
