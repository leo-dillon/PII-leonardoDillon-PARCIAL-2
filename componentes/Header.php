<?php 
    session_start();
    require_once "./clases/Secciones.php";
    require_once "./clases/Funciones.php";
    $seccionesVisibles = Secciones::seccionesVisibles();


    

?> 

<header class="bg-light shadow-sm">
    <div class="container py-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center contenedorLogo">
            <picture class="me-3">
                <img src="./imagenes/logo.png   " alt="Logo de Leonardo Dillon" class="img-fluid" style="max-height: 50px;">
            </picture>
            <h2 class="m-0 fs-4">Luce <span class="salto">Delicate</span></h2>
        </div>
        <nav class="d-flex  align-items-center">
            <?php
                foreach($seccionesVisibles as $value){
                    $valueSeccion = $value -> getSeccion();
                    $valueTitulo = $value -> getTitulo();
            ?>
                <a 
                    class="nav-link <?= ($seccionActual === $valueSeccion) ? 'active fw-bold' : ''?>" 
                    href="?sec=<?= $valueSeccion ?>"
                >
                    <?= $valueTitulo ?>
                </a>
            <?php 
                }   
            ?>
            <?php if(!isset($_SESSION['user_id'])) {?>
                <a class="ms-3 btn btn-primary" href="?sec=iniciarSesion">Iniciar Sesión</a>
                <a class="ms-3 btn btn-secondary" href="?sec=registrarse">Registrarte</a>
            <?php } else {?>
                <a class="ms-3 btn btn-primary" href="?sec=admin">Bienvenido </a>
                <a class="ms-3 btn btn-danger" href="?sec=cerrarSesion">Cerrar Sesión</a>
            <?php } ?>
        </nav>
    </div>
</header>
<style scoped>
    header:hover .contenedorLogo h2 span{
        letter-spacing: 4px;
    } 
    .contenedorLogo h2 {
    color: #333;
    font-weight: 600;
    }
    .contenedorLogo h2 span{
        transition: letter-spacing .2s ease-out;
    }
    nav{
        display: flex;
    }
    nav .nav-link {
        color: #555;
        text-transform: uppercase;
        font-size: 14px;
        padding: 0 15px;
        transition: color 0.3s;
    }

    nav .nav-link.active {
        color: #007bff;
    }

    nav .nav-link:hover {
        color: #0056b3;
    }
</style>