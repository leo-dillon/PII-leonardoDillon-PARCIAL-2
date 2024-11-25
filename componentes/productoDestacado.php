<?php
function crearProductoDestacado($imagen, $titulo, $descripcion, $id) {
    return '
    <div class="col-md-4">
        <div class="card h-100">
            <img src="' . $imagen . '" class="card-img-top" alt="' . $titulo . '">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">' . $titulo . '</h5>
                <p class="card-text">' . $descripcion . '</p>
                <a href="?sec=producto&id='. $id .'" class="btn btn-primary mt-auto">Ver detalles</a>
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
</style>