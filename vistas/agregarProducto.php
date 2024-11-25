<?php 
    require_once './clases/Conexion.php';
    require_once "./clases/Productos.php";
    require_once "./clases/Marcas.php";
    require_once "./clases/Categorias.php";

    $marcasTotales = Marcas::traerMarcas();
    $categoriasTotales = Categoria::traerCategorias();
    $editarDatos = [];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $productoName = $_POST['productoName'];
        $productoDescripcion = $_POST['productoDescripcion'];
        $productoImagen = "./imagenes/error.jpg";
        $productoPrecio = $_POST['productoPrecio'];
        $productoStock = $_POST['productoStock'];
        $productoCategoriaId = $_POST['productoCategoriaId'];
        $productoMarcaId = $_POST['productoMarcaId'];
        $productoUserId = $_SESSION['user_id'];
        
        $editarDatos = Producto::agregarProducto(
            $productoName,
            $productoDescripcion,
            $productoImagen,
            $productoPrecio,
            $productoStock,
            $productoCategoriaId,
            $productoMarcaId,
            $productoUserId
        );
    };

?>
<form action="#" method="POST" enctype="multipart/form-data" class="container my-5">
    <h2 class="mb-4">Editar Producto</h2>
    <div class="mb-3">
        <label for="productoName" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="productoName" name="productoName"  required>
    </div>

    <div class="mb-3">
        <label for="productoDescripcion" class="form-label">Descripción del Producto</label>
        <textarea class="form-control" id="productoDescripcion" name="productoDescripcion" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label for="productoImagen" class="form-label">Imagen del Producto</label>
        <input type="file" class="form-control" id="productoImagen" name="productoImagen">
    </div>

    <div class="mb-3">
        <label for="productoPrecio" class="form-label">Precio del Producto</label>
        <input type="number" class="form-control" id="productoPrecio" name="productoPrecio" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="productoStock" class="form-label">Stock del Producto</label>
        <input type="number" class="form-control" id="productoStock" name="productoStock" required>
    </div>

    <div class="mb-3">
        <label for="productoCategoriaId" class="form-label">Categoría del Producto</label>
        <select class="form-select" id="productoCategoriaId" name="productoCategoriaId" required>
            <?php foreach($categoriasTotales as $categoria){ ?>
                <?=   "<option value='" . $categoria["category_id"] ."'>" . $categoria["category_name"]  ."</option>" ?>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="productoMarcaId" class="form-label">Marca del Producto</label>
        <select class="form-select" id="productoMarcaId" name="productoMarcaId" required>
            <?php foreach($marcasTotales as $marcas){ ?>
                <?=   "<option value='" . $marcas["brand_id"] ."'>" . $marcas["brand_name"]  ."</option>" ?>
            <?php } ?> 
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>

