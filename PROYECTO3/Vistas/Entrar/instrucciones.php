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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet" type="text/css" href="../Estilos/bootstrap.css" />

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <style>
        .instructions-card{
            margin: 3%;
            padding: 3%;
            text-align: justify;
            border-radius: 20px;
            border: 1px solid black;
        }
    </style>

</head>

<body>
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
                        <a href="../instrucciones.php" class="btn" style = "color: #FFFFFF">Instrucciones</a>
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
    
    <div class = "instructions-card">
        <h1 style = "text-align: center"><strong>Instrucciones</strong></h1>
        <hr>
        <p>
            ¡Bienvenido a nuestra tienda de avatares! Aquí, puedes crear el avatar perfecto que refleje tu estilo único y personalidad. Ofrecemos una amplia gama de opciones para personalizar cada detalle de tu avatar, desde la elección de peinados y colores hasta accesorios y ropa.

            Nuestro proceso de personalización es simple e intuitivo: selecciona las características que más te gusten, experimenta con diferentes combinaciones y visualiza tu avatar en tiempo real. Ya sea que prefieras un look elegante, deportivo o completamente original, tenemos las herramientas y opciones para que tu avatar sea verdaderamente tuyo.

            Explora nuestra variedad de opciones y deja volar tu creatividad. ¡Tu avatar perfecto te está esperando.
        </p>

        <br>

        <p>
            - Selecciona tu Base: Empieza eligiendo el tipo de avatar que más te guste. Tenemos una variedad de formas y estilos básicos para que elijas el que mejor se adapte a tu visión.
            <br>
            - Personaliza el Rostro: Ajusta los rasgos faciales de tu avatar. Puedes cambiar la forma del rostro, el color de piel, y elegir entre diferentes ojos, cejas y bocas para darle una expresión que refleje tu personalidad.
            <br>
            - Elige el Peinado y Color: Navega a través de nuestra colección de peinados y colores para encontrar el que mejor se adapte a tu estilo. ¡No dudes en experimentar con diferentes combinaciones!
            <br>
            - Vístelo a tu Gusto: Explora nuestra amplia gama de ropa y accesorios. Desde outfits casuales hasta elegantes y únicos, puedes elegir prendas y complementos que hagan que tu avatar destaque.
            <br>
            - Añade Accesorios y Detalles: Dale el toque final a tu avatar con accesorios como gafas, joyas, y otros detalles personalizados. Estos pequeños toques pueden hacer una gran diferencia.
            <br>
            - Revisa y Ajusta: Una vez que hayas terminado, revisa tu avatar en 3D. Si ves algo que te gustaría ajustar, vuelve a los pasos anteriores y realiza las modificaciones necesarias hasta que estés completamente satisfecho.
            <br>
            - Guarda y Comparte: Cuando estés feliz con tu avatar, guárdalo y compártelo con tus amigos o utilízalo en tus plataformas favoritas. ¡Tu avatar está listo para brillar!
        </p>
        
        <h3><strong>¡TUTORIAL DE CREACIÓN DE AVATAR!</strong></h3>
    <br>
    <div style="text-align: center;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/pjPkcbT8qr4?si=VVrh6CgNxJAvY2op" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  <br>
    </div>
    

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
</body>

</html>
