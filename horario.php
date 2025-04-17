<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
    <link rel="stylesheet" href="public/Css/estilos.css">
    <link rel="stylesheet" href="public/Css/font-awesome.css">
    <link rel="stylesheet" href="public/Css/bootstrap.min.css">
    <link rel="shortcut icon" href="public/img/horario.ico" type="image/x-icon">
    <script>
        function icoBar(){
            const menu = document.getElementById("ListaMenu");
            menu.classList.toggle("show");
        }
    </script>
    <style>
    #informacion p {
        text-align: justify;
        line-height: 1.5;
    }
</style>
</head>
<body>
    <nav>
        <button class="icoBar" onclick="icoBar()"><i class="fa fa-bars"></i></button>
        <ul id="ListaMenu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="conocenos.php">Conócenos</a></li>
            <li><a href="historia.php">Historia</a></li>
            <li><a href="inicio.php">Inicio de Sesión</a></li>
        </ul>
    </nav>
    <div class="container">
        <header class="text-center mt-4 letras">
            <h2>Horarios Académicos</h2>
        </header>
        
        <section id="informacion">
            <div class="principalmargen">
                <h3>Información sobre nuestros horarios</h3>
                <p>Nuestro horario de atencion es de lunes a viernes de 6 de la mañana a 8 de la noche,
                    ya sea visitando nuestras instalaciones en Matías Romero Avendaño Oaxaca en la avenida
                    uno colonia el llanito en los pinos, o llamando al numero 9721044170 </p>
                
                <center><img src="public/img/horario.jpg" class="img-thumbnail" width="50%" alt="Horarios"></center>
            </div>
        </section>
    </div>

    <footer>&copy; Desarrollo por Juan Darío Muñoz Castillo</footer>
</body>
</html>