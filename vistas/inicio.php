<?php 
    require_once "./clases/Productos.php";
    require_once "./componentes/productoDestacado.php";

    $cantidadProductos = Producto::cantidadProductos();
    $productosDestacados = [];
    for ($i=0; $i < 3; $i++) { 
        $productoAleatorio = Producto::productoRandom();
        $productosDestacados[] = $productoAleatorio;
    }
?>
<section class="bg-dark text-white text-center p-5 col-12">
    <div class="container">
        <h1 class="display-4">Bienvenido a Luce Delicate</h1>
        <p class="lead">Descubre lo último en moda y tendencias para lucir espectacular.</p>
        <a href="#productos" class="btn btn-primary btn-lg">Ver Productos</a>
    </div>
</section>
<section id="productos" class="py-5 col-10">
        <div class="container">
            <h2 class="text-center mb-5">Productos Destacados</h2>
            <hr>
            <div class="col-12 d-flex justify-content-between">
                <?php foreach($productosDestacados as $producto){ ?>
                    <?=
                        crearProductoDestacado(
                            $producto["imagen"],
                            $producto["name"],
                            $producto["description"],
                            $producto["product_id"]
                        );
                    ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>