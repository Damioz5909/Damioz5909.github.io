<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos</title>
    <link rel="stylesheet" href="public/Css/estilos.css">
    <link rel="stylesheet" href="public/Css/font-awesome.css">
    <link rel="stylesheet" href="public/Css/bootstrap.min.css">
    <link rel="shortcut icon" href="public/img/conocenos.ico" type="image/x-icon">

    <script>
        function icoBar(){
            const menu = document.getElementById("ListaMenu");
            menu.classList.toggle("show");
        }
    </script>

    <style>
        .container {
            margin-left: 15px;
            margin-right: 15px;
        }
        #conocenosSection {
            background: none; 
            padding: 20px;
        }
        #conocenosSection img {
            margin-top: 20px;
            width: 50%;
        }
        #conocenosSection p {
        text-align: justify;   
        line-height: 1.6;
        }
        footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <button class="icoBar" onclick="icoBar()"><i class="fa fa-bars"></i></button>
        <ul id="ListaMenu">
        <li> <a href="index.php">Inicio</a></li>
        <li> <a href="horario.php">Horario de atencion</a></li>
        <li><a href="historia.php">Historia</a></li>
        <li><a href="sesion.php">Inicio de sesion</a></li>
        </ul>
    </nav>
    <div class="container">
        <header class="text-center mt-4 letras">
            <h2>Conócenos</h2>
        </header>
        <section id="conocenosSection">
            <div class="principalmargen">
                <h3>¿Quiénes somos?</h3>
                <p>Somos una bloquera la cual se dedica a la fabrica de postes de concreto para cercar todo tipo de propiedades,
                    tenemos postes de 2 metros y de 2 metros y medio de alto, por un grosor de 10 centimetros x 10 centimetros,
                    altamente resistentes a diferencia de otros productos los cuales sueles romperse con facilidad.</p>
                
                <center><img src="public/img/Conocenos.jpg" class="img-thumbnail" alt="Conócenos"></center>
            </div>
        </section>
    </div>

    <footer>&copy; Desarrollo por Juan Darío Muñoz Castillo</footer>
</body>
</html>