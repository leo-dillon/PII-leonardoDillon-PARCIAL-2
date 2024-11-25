<?php
function crearProductoTienda($imagen, $titulo, $descripcion, $precio, $id) {
    return '
    <div class="col-md-4">
        <div class="card h-100">
            <img src="' . $imagen . '" class="card-img-top" alt="' . $titulo . '">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">' . $titulo . '</h5>
                <p class="card-text">' . $descripcion . '</p>
                <p class="card-text price">' . $precio .'   $ </p>
                <a href="?sec=producto&id='. $id .'" class="btn btn-secondary mt-auto">Detalles</a>
                <a href="?sec=carrito" class="btn btn-primary mt-3">Comprar</a>
            </div>
        </div>
    </div>';
}
?>
<style scoped>
    div.col-md-4{
        max-width: 350px;
        border-radius: 12px;
        transition: box-shadow .2s ease-out;
    }
    div.col-md-4:hover{
        box-shadow: 0 0 12px grey;
    }
    img{
        border-radius: 16px;
    }
    .price{
        font-size: 1.8rem;
        font-weight: bold;
    }
</style>