<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirigir al formulario de login o página principal
header("Location: ?sec=iniciarSesion");
exit();
?>