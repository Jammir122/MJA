<?php

    session_start();

    if(isset($_SESSION ['usuario'])){
        header("location : bienvenida");
    };

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>

  <link rel="stylesheet" href="../css/iniciosesion.css">
  <link rel="stylesheet" href="/css/main-login.css">
</head>
<body>
    <nav>

    </nav>


    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Crear una cuenta</h1>
                <span>Utilice un correo electrónico para registrarse</span>
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <button>registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>

                <h1>iniciar sesión</h1>
                <input type="email" placeholder="Correo electrónico">
                <input type="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Iniciar sesion</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h2>Bienvenido otra vez!😊</h2>
                    <p>Ingrese sus datos para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar sesion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h2>Regístrate y únete para descubrir un mundo lleno de posibilidades.</h2>
                    <p> ¡Estamos emocionados de comenzar este viaje contigo! 🚀</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/inicio.js"></script>
</body>
</html>
