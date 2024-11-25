
<?php 
    require_once "./clases/Productos.php";
    $userName = $_SESSION['username'];
    $userId = $_SESSION['user_id'];
    $productosUser = Producto::productoUser($userId);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/17932/17932530.png" alt="Foto de usuario" class="rounded-circle mb-3" width="150">
                    <h2 class="card-title">Bienvenido, <?= $userName ?>!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Tus Productos</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Categoría</th>
                                <th>Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productosUser as $producto) { ?>
                                <tr>
                                    <td>
                                        <img src="<?= $producto['imagen'] ?>" alt="Imagen de <?= $producto['name'] ?>" width="64">
                                    </td>
                                    <td><?= $producto['name'] ?></td>
                                    <td><?= $producto['description'] ?></td>
                                    <td>$<?= $producto['price'] ?></td>
                                    <td><?= $producto['stock'] ?>.u</td>
                                    <td><?= $producto['category_name'] ?></td>
                                    <td><?= $producto['brand_name'] ?></td>
                                    <td>
                                        <a class="ms-3 btn btn-primary width-100" href="?sec=editarProducto&id=<?= $producto['product_id']; ?>" >Editar </a>
                                        <a class="ms-3 btn btn-danger width-100" href="?sec=eliminarProducto&id=<?= $producto['product_id']; ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a class="mx-auto btn btn-success" href="?sec=agregarProducto"> Crear Producto </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style scoped>
    td{
        text-align: center;
    }
    td a{
        width: 90px;
        margin-bottom: 4px;
    }
</style>
