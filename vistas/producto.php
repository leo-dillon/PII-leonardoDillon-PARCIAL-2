<?php 
    require_once "./clases/Productos.php";
    if(isset($_GET['id'])){
        $id = $_GET["id"];
        $producto = Producto::ProductoId($id);
    } 
?>

<?php 
 if(count($producto) > 1){
?>
<section class="producto-detalle py-5">
    <div class="container">
        <div class="d-flex align-items-center gap-3">
            <!-- Imagen del Producto -->
            <div class="col-md-5 text-center mx-3">
                <img src="<?= $producto["imagen"] ?>" alt="<?= $producto["name"] ?>" class="img-fluid shadow-lg rounded" style="max-width: 100%;">
            </div>
            <!-- Detalles del Producto -->
            <div class="col-md-7">
                <h1 class="display-4 fw-bold text-primary"><?= $producto["name"] ?></h1>
                <p class="lead text-muted"><?= $producto["description"] ?></p>

                <div class="producto-precio my-3">
                    <h2 class="text-success fw-bold">$<?= number_format($producto["price"], 2); ?></h2>
                </div>

                <div class="producto-stock my-2">
                    <?php if ($producto["stock"] > 0): ?>
                        <span class="badge bg-success">En stock (<?= $producto["stock"] ?> disponibles)</span>
                    <?php else: ?>
                        <span class="badge bg-danger">Agotado</span>
                    <?php endif; ?>
                </div>

                <ul class="list-group my-4">
                    <li class="list-group-item"><strong>Categoría:</strong> <?= $producto["category_name"] ?></li>
                    <li class="list-group-item"><strong>Marca:</strong> <?= $producto["brand_name"] ?></li>
                    <li class="list-group-item"><strong>Publicado por:</strong> <?= $producto["username"] ?></li>
                </ul>

                <a href="#" class="btn btn-primary btn-lg">Añadir al carrito</a>
            </div>
        </div>
    </div>
</section>
<?php 
}else{
?>
    <section class="producto-no-encontrado py-5">
        <div class="container text-center">
            <div class="alert alert-danger" role="alert">
                <h2 class="display-4">Producto no encontrado</h2>
                <p class="lead">Lo sentimos, el producto que estás buscando no existe o ya no está disponible.</p>
                <a href="?sec=tienda" class="btn btn-primary">Volver a la tienda</a>
            </div>
        </div>
    </section>
 <?php }; ?>

<style scoped>
    .producto-detalle {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 30px;
    }

    .producto-detalle .img-fluid {
        max-width: 80%;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .producto-detalle .img-fluid:hover {
        transform: scale(1.05);
    }

    .producto-precio h2 {
        font-size: 2.5rem;
    }

    .producto-stock .badge {
        font-size: 1.2rem;
        padding: 10px 20px;
    }
</style>
