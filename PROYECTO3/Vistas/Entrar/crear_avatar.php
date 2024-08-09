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
    <title>Crear Avatar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../Estilos/c_avatar.css">
    <link rel="stylesheet" href="../../Estilos/personalizados.css">
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
                        <a href="instrucciones.php" class="btn" style = "color: #FFFFFF">Instrucciones</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <span class="navbar-text"><?php echo $_SESSION['user_name']; ?></span>
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

    <div class="container mt-5">
        <h2 class="text-center">Crear Tu Avatar</h2>
        <form id="avatarForm" class="mt-4" method="POST" action="../../Controladores/crear_avatar.php">
            <div class="form-group">
                <label for="tonoPiel">Tono de Piel</label>
                <div class="d-flex justify-content-around">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tonoPiel" id="tonoPielClara" value="clara" required>
                        <label class="form-check-label" for="tonoPielClara">
                            <img src="../../img/clara.JPG" alt="Clara" class="img-thumbnail">
                            Clara
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tonoPiel" id="tonoPielMedia" value="media" required>
                        <label class="form-check-label" for="tonoPielMedia">
                            <img src="../../img/media.JPG" alt="Media" class="img-thumbnail">
                            Media
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tonoPiel" id="tonoPielOscura" value="oscura" required>
                        <label class="form-check-label" for="tonoPielOscura">
                            <img src="../../img/oscura.JPG" alt="Oscura" class="img-thumbnail">
                            Oscura
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="colorCabello">Color de Cabello</label>
                <div class="d-flex justify-content-around">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="colorCabello" id="colorCabelloCafe" value="cafe" required>
                        <label class="form-check-label" for="colorCabelloCafe">
                        <img src="../../img/cafe.JPG" alt="Cafe" class="img-thumbnail">
                            Café
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="colorCabello" id="colorCabelloNegro" value="negro" required>
                        <label class="form-check-label" for="colorCabelloNegro">
                            <img src="../../img/negro.JPG" alt="Negro" class="img-thumbnail">
                            Negro
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="colorCabello" id="colorCabelloRubio" value="rubio" required>
                        <label class="form-check-label" for="colorCabelloRubio">
                            <img src="../../img/rubio.JPG" alt="Rubio" class="img-thumbnail">
                            Rubio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="colorCabello" id="colorCabelloRojo" value="rojo" required>
                        <label class="form-check-label" for="colorCabelloRojo">
                            <img src="../../img/rojo.JPG" alt="Rojo" class="img-thumbnail">
                            Rojo
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="estiloCabello">Estilo de Cabello</label>
                <div class="d-flex justify-content-around">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estiloCabello" id="estiloCabelloRecogido" value="recogido" required>
                        <label class="form-check-label" for="estiloCabelloRecogido">
                            <img src="../../img/recogido.JPG" alt="Recogido" class="img-thumbnail">
                            Moño
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estiloCabello" id="estiloCabelloColitas" value="colitas" required>
                        <label class="form-check-label" for="estiloCabelloColitas">
                            <img src="../../img/colitas.JPG" alt="Colitas" class="img-thumbnail">
                            Colitas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estiloCabello" id="estiloCabelloClasico" value="clasico" required>
                        <label class="form-check-label" for="estiloCabelloClasico">
                            <img src="../../img/clasico.JPG" alt="Clásico" class="img-thumbnail">
                            Clásico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estiloCabello" id="estiloCabelloCorto" value="corto" required>
                        <label class="form-check-label" for="estiloCabelloCorto">
                            <img src="../../img/corto.JPG" alt="Corto" class="img-thumbnail">
                            Corto
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="lentes">Usa Lentes?</label>
                <div class="d-flex justify-content-around">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lentes" id="lentesSi" value="lentes" required>
                        <label class="form-check-label" for="lentesSi">
                            <img src="../../img/lentes.jpg" alt="Lentes" class="img-thumbnail">
                            Sí
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="lentes" id="lentesNo" value="sinlentes" required>
                        <label class="form-check-label" for="lentesNo">
                            <img src="../../img/sinlentes.jpg" alt="Sin Lentes" class="img-thumbnail">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="animo">Elija su Estado de Ánimo</label>
                <div class="d-flex justify-content-around">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="animo" id="animoFeliz" value="feliz" required>
                        <label class="form-check-label" for="animoFeliz">
                            <img src="../../img/feliz.jpg" alt="Feliz" class="img-thumbnail">
                            Feliz
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="animo" id="animoAmargado" value="amargado" required>
                        <label class="form-check-label" for="animoAmargado">
                            <img src="../../img/amargado.jpg" alt="Amargado" class="img-thumbnail">
                            Amargado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="animo" id="animoEmocionado" value="emocionado" required>
                        <label class="form-check-label" for="animoEmocionado">
                            <img src="../../img/emocionado.jpg" alt="Emocionado" class="img-thumbnail">
                            Emocionado
                        </label>
                    </div>
                </div>
            </div>
            
            <button type="button" class="btn btn-primary" onclick="crearAvatar()">Crear Avatar</button>
        </form>

        <div id="avatarResult" class="mt-4 d-none">
            <h3 class="text-center">Tu Avatar</h3>
            <img id="avatarImagen" src="" alt="Avatar" class="img-fluid mx-auto d-block">
            <form id="comentarioForm" class="mt-3" method="POST" action="../../Controladores/crear_avatar.php">
                <div class="form-group">
                    <label for="titulo">Título del Avatar</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="comentario">Añadir un comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
                </div>
                <input type="hidden" name="imagen" id="imagenAvatar">
                <input type="hidden" name="tonoPiel" id="tonoPiel">
                <input type="hidden" name="colorCabello" id="colorCabello">
                <input type="hidden" name="estiloCabello" id="estiloCabello">
                <input type="hidden" name="lentes" id="lentes">
                <input type="hidden" name="animo" id="animo">
                <button type="submit" class="btn btn-info">Publicar</button>
                <button type="button" class="btn btn-primary" onclick="guardarAvatar()">Guardar</button>
                <button type="button" class="btn btn-danger" onclick="resetForm()">Volver a Crear</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="../../JS/avatar.js"></script>
</body>

</html>
