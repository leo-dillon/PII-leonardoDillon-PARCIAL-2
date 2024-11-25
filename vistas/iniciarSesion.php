<?php
require_once './clases/Conexion.php';
require_once './clases/Usuarios.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capturamos los datos del formulario
    $email = $_POST['mail'];
    $password = $_POST['contrasena'];

    // Intentamos obtener el usuario de la base de datos
    $usuario = Usuarios::traerUsuario($email, $password);

    if ($usuario) {
        // Login exitoso, guardamos los datos del usuario en la sesión
        $_SESSION['user_id'] = $usuario['user_id'];
        $_SESSION['username'] = $usuario['username'];

        // Redirigimos al usuario a la página principal o a su dashboard
        header("Location: ?sec=inicio");
        exit();
    } else {
        // Si el login falla, mostramos un mensaje de error
        $error = "Usuario o contraseña incorrectos";
    }
};
?>


<form class="border border-primary col-10 col-md-6" method="POST" action="?sec=iniciarSesion">
    <div class="form-group col-12">
        <label for="mail" class="fs-2">Email</label>
        <input type="email" class="form-control col-12" id="mail" aria-describedby="emailHelp" placeholder="leo@davinci.edu.ar" name="mail">
        <small id="emailHelp" class="form-text text-muted">No compartas tus datos con nadie. Evite inconvenientes</small>
    </div>
    <div class="form-group col-12">
        <label for="constrasena" class="fs-2">Contraseña</label>
        <input type="password" class="form-control col-12" id="constrasena" placeholder="***********" name="contrasena">
    </div>
    <button type="submit" class="btn btn-outline-dark col-12 mt-2">Iniciar Sesión</button>
</form>
<div>
    <div class="contenedorCirculo circulo1">
    </div>
    <div class="contenedorCirculo circulo2">
    </div>
    <div class="contenedorCirculo circulo3">
    </div>
</div>

<style scoped>
form{
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 24px;
    padding: 12px 32px;
    margin: auto;
    border: 1px solid grey;
    box-shadow: 0 0 12px grey;
    border-radius: 24px;
    background-color: #FFFFFF;
}
.contenedorCirculo{
    width: 100px;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    right: 0;
    border-radius: 50%;
    border: 0.5px solid grey;
    box-shadow: 0 0 12px grey;
    z-index: -1;
}
.circulo1{
    top: 120px;
    animation: moverIzqDerecha 17s linear alternate-reverse infinite;
}
.circulo2{
    top: calc(50% - 50px);
    animation: moverIzqDerecha 8s linear alternate-reverse infinite;
}
.circulo3{
    bottom: 120px;
    animation: moverIzqDerecha 13s linear alternate-reverse infinite;
}
.contenedorCirculo img{
    width: 80%;
    height: 80%;
    border-radius: 100%;
}
@keyframes moverIzqDerecha {
    0% {
        transform: translateX(-32px);
    }
    50% {
        transform: translateX(-400px); 
    }
    100% {
        transform: translateX(-32px);
    }
}
.btn-outline-dark {
        color: #fff !important;
        background-color: #05070a !important;
        border:2px solid #05070a !important;
}
.btn:hover {
    color: #05070a !important;
    background-color: #fff !important;
    border: 2px solid #05070a !important;
}
</style>