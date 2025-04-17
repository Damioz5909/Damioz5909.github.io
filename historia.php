<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia</title>
    <link rel="stylesheet" href="public/Css/estilos.css">
    <link rel="stylesheet" href="public/Css/font-awesome.css">
    <link rel="stylesheet" href="public/Css/bootstrap.min.css">
    <link rel="shortcut icon" href="public/img/historia.ico" type="image/x-icon">

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
            <li><a href="horario.php">Horario de atencion</a></li>
            <li><a href="sesion.php">Inicio de Sesión</a></li>
        </ul>
    </nav>
    <div class="container">
        <header class="text-center mt-4 letras">
            <h2>Horarios Académicos</h2>
        </header>
        
        <section id="informacion">
            <div class="principalmargen">
                <h3>Nuestra historia</h3>
                <p>Nuestra empresa comenzo como un negocio familiar liderado por una madre soltera la cual nunca se quedaba
                    quieta ni le temia al trabajo pesado, se empezo a vender localmente y se decidio a empezar a producir cada
                    vez mas productos, con el tiempo se decidio implementar un control administrativo para mejorar el control 
                    del inventario producido y en produccion.</p>
                
                <center><img src="public/img/historia.png" class="img-thumbnail" width="50%" alt="Horarios"></center>
            </div>
        </section>
    </div>

    <footer>&copy; Desarrollo por Juan Darío Muñoz Castillo</footer>
</body>
</html>