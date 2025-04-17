<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión y Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/estilosesion.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="public/css/font-awesome.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">

</head>
<body>
    <nav>
        <button class="icoBar" onclick="icoBar()"><i class="fa fa-bars"></i></button>
        <ul id="ListaMenu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="conocenos.php">Conócenos</a></li>
            <li> <a href="horario.php">Horario de atencion</a></li>
            <li><a href="historia.php">Historia</a></li>
        </ul>
    </nav>

<main>
    <div class="contenedor__todo">

        <div class="caja__trasera">
            <div class="caja__trasera-acceso">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesión">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-registro">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Registrarse</button>
            </div>
        </div>

        <div class="contenedor__login-register">
            <!-- Formulario de inicio de sesión -->
            <form action="#" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electrónico">
                <input type="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>

            <!-- Formulario de registro -->
            <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electrónico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="contraseña">
                <button>Registrarse</button>
            </form>
        </div>

    </div>
</main>

<script src="public/js/script.js"></script>

</body>
</html>