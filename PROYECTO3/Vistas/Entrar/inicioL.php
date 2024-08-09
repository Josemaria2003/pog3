<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../inicio.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Autenticado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Estilos/personalizados.css">
</head>

<body onload="playSound()">
    <header class="header_section">
        <nav class="navbar navbar-expand-lg" style="background-color: #4d5c42;">
            <a class="navbar-brand" href="./inicioL.php">
                <img src="../../img/logo.PNG" width="30" height="30" alt=""> Avatix
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./inicioL.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="instrucciones.php" class="btn" style = "color: #FFFFFF">Instrucciones</a>
                    </li>
                </ul> 
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <span class="navbar-text"><?php echo '¡Hola, '.$_SESSION['user_name'].'!'; ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./perfil_usuario.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../inicio.html" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Contenido de la página -->
    <main class="container mt-4">
        <!-- Ruleta de imágenes -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../img/img1.jpg" class="d-block w-100" alt="Avatar 1">
                </div>
                <div class="carousel-item">
                    <img src="../../img/img8.JPG" class="d-block w-100" alt="Avatar 2">
                </div>
                <div class="carousel-item">
                    <img src="../../img/img5.JPG" class="d-block w-100" alt="Avatar 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Botón de Crear Avatar -->
        <div class="text-center mt-4">
            <a href="./crear_avatar.php" class="btn btn-success btn-lg">Crear Avatar</a>
        </div>

        <!-- Últimos avatares creados -->
        <section class="latest-avatars mt-5">
            <h2>Últimos Avatares Creados</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../img/img2.JPG" class="card-img-top" alt="Avatar 4">
                        <div class="card-body">
                            <h5 class="card-title">Avatar 4</h5>
                            <p class="card-text">Creado por Usuario 4.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../img/img6.JPG" class="card-img-top" alt="Avatar 5">
                        <div class="card-body">
                            <h5 class="card-title">Avatar 5</h5>
                            <p class="card-text">Creado por Usuario 5.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../img/img9.jpg" class="card-img-top" alt="Avatar 6">
                        <div class="card-body">
                            <h5 class="card-title">Avatar 6</h5>
                            <p class="card-text">Creado por Usuario 6.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avatares de otros usuarios -->
        <section class="user-avatars mt-5">
            <h2>Avatares de Otros Usuarios</h2>
            <div class="card-columns">
                <div class="card">
                    <img src="../../img/img4.JPG" class="card-img-top" alt="Avatar 4">
                    <div class="card-body">
                        <h5 class="card-title">Usuario 1</h5>
                        <p class="card-text">Este es un avatar creado por el usuario 1.</p>
                        <button class="btn btn-secondary btn-sm">Comentar</button>
                    </div>
                </div>
                <div class="card">
                    <img src="../../img/img7.JPG" class="card-img-top" alt="Avatar 5">
                    <div class="card-body">
                        <h5 class="card-title">Usuario 2</h5>
                        <p class="card-text">Este es un avatar creado por el usuario 2.</p>
                        <button class="btn btn-secondary btn-sm">Comentar</button>
                    </div>
                </div>
                <div class="card">
                    <img src="../../img/img3.JPG" class="card-img-top" alt="Avatar 6">
                    <div class="card-body">
                        <h5 class="card-title">Usuario 3</h5>
                        <p class="card-text">Este es un avatar creado por el usuario 3.</p>
                        <button class="btn btn-secondary btn-sm">Comentar</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reseñas de usuarios -->
        <section class="user-reviews mt-5">
            <h2>Reseñas de Usuarios</h2>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuario 1</h5>
                        <p class="card-text">"Me encanta la facilidad con la que puedo crear y compartir avatares en Avatix!"</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuario 2</h5>
                        <p class="card-text">"Una plataforma increíble para expresar tu creatividad a través de avatares personalizados."</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuario 3</h5>
                        <p class="card-text">"Avatix tiene la mejor comunidad de creadores de avatares, siempre es inspirador ver los nuevos diseños."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Noticias y actualizaciones -->
        <section class="news-updates mt-5">
            <h2>Noticias y Actualizaciones</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Nueva actualización de la plataforma</h5>
                    <p class="mb-1">Descubre las últimas mejoras y nuevas características añadidas en la última actualización.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Concurso de creación de avatares</h5>
                    <p class="mb-1">Participa en nuestro concurso mensual y gana premios increíbles.</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Historias de éxito de nuestros usuarios</h5>
                    <p class="mb-1">Lee sobre cómo nuestros usuarios han usado Avatix para crear avatares impactantes.</p>
                </a>
            </div>
        </section>
    </main>

    <footer class="footer_section bg-green text-white mt-5 p-4">
        <div class="container text-center">
            <p>&copy; 2024 Avatix. Todos los derechos reservados.</p>
            <div class="footer-links">
                <a href="../contacto.html" class="text-white">Contacto</a> |
                <a href="../ayuda.html" class="text-white">Ayuda</a> |
                <a href="../privacidad.html" class="text-white">Política de Privacidad</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <audio id="loginSound" src="../../sound/sonido.mp3" ></audio>
    <!-- JavaScript -->
    <script>
        function playSound() {
            var sound = document.getElementById("loginSound");
            sound.play();
        }
    </script>
</body>

</html>