<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloquera Cano</title>
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="public/css/font-awesome.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="shortcut icon" href="public/img/Logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
    function icoBar(){
        const menu = document.getElementById("ListaMenu");
        menu.classList.toggle("show");
    }
    </script>
</head>

<body>
    <nav>
        <button class="icoBar" onclick="toggleMenu()"><i class="fa fa-bars"></i></button>
        <ul id="ListaMenu">
            <li> <a href="index.php">Inicio</a></li>
            <li> <a href="conocenos.php">Conocenos</a></li>
            <li> <a href="horario">Horario de atencion</a></li>
            <li><a href="historia.php">Historia</a></li>
            <li><a href="sesion.php">Inicio de sesion</a></li>
        </ul>
    </nav>

    <div class="container">
        <header class="text-center mt-4 letras">
            <h4>CENTRO ADMINISTRATIVO</h4>
        </header>

        <!-- Formulario para agregar imagen -->
<div class="mt-4 text-center">
    <h5>Agregar imagen al carrusel</h5>
    <input type="text" id="imageUrl" placeholder="URL de la imagen" class="form-control w-50 mx-auto mb-2">
    <button class="btn btn-primary" onclick="addImage()">Agregar</button>
</div>

<div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner text-center" id="carouselInner">
        <!-- Las imágenes se insertan dinámicamente aquí -->
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>


        <section id="principal">
            <div class="principalmargen">
            <p>Este es un controlador administrativo diseñado para facilitar la administracion del producto e insumos que
               entran y salen en la corporacion, mejorando los tiempos de atencion al cliente y asi mismo la produccion del
               producto haciendo que todo sea mas productivo</p>
            <center><img src="public/img/Imagen Logo.png" class="img-thumbnail" width="50%" alt="Logo Bloquera"></center>
            </div>
            
            <div class="row justify-content-center mt-4">
    <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
            <img src="public/img/registro_producto.png" class="card-img-top img-small" alt="Registro Productos">
            <div class="card-body">
                <h5 class="card-title">Registro de los Productos</h5>
                <p class="card-text">
                    Implementación de un software de control administrativo para la gestión del inventario
                    en la bloquera Cano, que se dedica a la fabricación de postes de concreto.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
            <img src="public/img/beneficios.jpg" class="card-img-top img-small" alt="Beneficios">
            <div class="card-body">
                <h5 class="card-title">Beneficios</h5>
                <p class="card-text">
                    Mejora en la gestión del inventario: El sistema permitirá un seguimiento detallado y actualizado del inventario
                    de productos terminados y materias primas. Esto evitará tanto el desabastecimiento como la sobre existencia,
                    lo que resultará en un mejor aprovechamiento de los recursos y la reducción de desperdicios.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 mb-4">
        <div class="card h-100">
            <img src="public/img/mejoramiento.png" class="card-img-top img-small" alt="Mejoramiento Producto">
            <div class="card-body">
                <h5 class="card-title">Mejoramiento de Productos</h5>
                <p class="card-text">
                    El software permitirá un acceso en tiempo real a los datos del inventario, lo que proporciona un mejoramiento
                    en los productos debido a la eficiencia operativa, permitiendo el monitoreo constante de los recursos
                    disponibles y una producción controlada que garantiza su mejor calidad posible.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<aside id="secundario" class="text-center mt-5">
    <p>Te dejamos nuestras redes sociales:</p>
    <p class="text-center">
        <i class="fa fa-facebook fa-2x me-5"></i>
        <i class="fa fa-twitter fa-2x me-5"></i>
        <i class="fa fa-youtube fa-2x me-5"></i>
    </p>
</aside>
</div>
                                
                                 <footer>&copy; Desarrollo por Juan Darío Muñoz Castillo</footer>
                                 
                                 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
                                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
                                 <script>
    const defaultImages = [
        "public/img/img1.jpg",
        "public/img/img2.jpg",
        "public/img/img3.jpg",
        "public/img/img4.jpg",
        "public/img/img5.jpg",
        "public/img/img6.jpg"
    ];

    function renderCarousel(images) {
        const carouselInner = document.getElementById("carouselInner");
        carouselInner.innerHTML = "";

        images.forEach((url, index) => {
            const div = document.createElement("div");
            div.className = `carousel-item ${index === 0 ? "active" : ""}`;
            div.innerHTML = `
                <img src="${url}" class="d-block mx-auto carousel-img" alt="Imagen ${index + 1}">
                <button class="btn btn-danger mt-2" onclick="removeImage(${index})">Eliminar</button>
            `;
            carouselInner.appendChild(div);
        });
    }

    function addImage() {
        const url = document.getElementById("imageUrl").value;
        if (url) {
            defaultImages.push(url);
            renderCarousel(defaultImages);
            document.getElementById("imageUrl").value = "";
        }
    }

    function removeImage(index) {
        defaultImages.splice(index, 1);
        renderCarousel(defaultImages);
    }

    // Inicializar carrusel con imágenes por defecto
    document.addEventListener("DOMContentLoaded", () => renderCarousel(defaultImages));
</script>

</body>
</html>