<?php
    require_once './clases/Conexion.php';
    require_once './clases/Funciones.php';
    require_once './clases/Secciones.php';

    $seccionActual = Funciones::seccionActual();
    $seccionesValidas = Secciones::seccionesValidas();
    if(!in_array($seccionActual, $seccionesValidas)){
        $seccionActual = '404';
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <title>PII examen 2</title>
</head>
<body>
    <?php
        require_once "./componentes/Header.php";
    ?>
    <main class="container-fluid">
        <?php 
            require_once "./vistas/$seccionActual.php";
        ?>
    </main>
    <?php
        require_once "./componentes/Footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
    }
    body{
        height: 100%;
        min-height: 100vh;
    }
    header{
        min-height: 10vh;
    }
    main{
        min-height: calc(100vh - 204px);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    footer{
        min-height: 10vh;
    }
</style>