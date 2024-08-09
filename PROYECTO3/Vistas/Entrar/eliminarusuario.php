<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Autenticado</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../Estilos/personalizados.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Funciones JavaScript -->
    <script type="text/javascript">
        function EliminarDatos() {
            jQuery.post(
                "../../Controladores/usuariocontroller.php",
                jQuery("#form_datos").serialize(),
                Respuesta
            ).fail(function(jqXHR, textStatus, errorThrown) {
                console.error("Error en la solicitud:", textStatus, errorThrown);
            });

            document.getElementById('form_datos').reset();
        }

        function Respuesta(arg) {
            alert(arg);
        }
    </script>
</head>

<body>
<header class="header_section">
        <nav class="navbar navbar-expand-lg" style="background-color: #4d5c42;">
            <a class="navbar-brand" href="./inicioA.php">
                <img src="../../img/logo.PNG" width="30" height="30" alt=""> Avatix
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a href="actualizarusuario.php" class="btn" style = "color: #FFFFFF">Actualizar</a>
                    </li>
                    <li class="nav-item">
                        <a href="eliminarusuario.php" class="btn" style = "color: #FFFFFF">Eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./inicioA.php">Leer</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                        <a class="nav-link" href="./perfil_usuario.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="../inicio.html" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="container text-center my-3 shadow-lg p-3">
        <div class="row">
            <div class="col">
                <br>
                <h5 class="text-success fw-bolder">ELIMINAR USUARIO</h5><br>
                <form id="form_datos">
                    <input type="hidden" name="opcion" value="eliminar">
                    <input type="text" name="id" class="form-control">
                    <button type="button" onclick="EliminarDatos();">Eliminar</button>
                </form>
            </div>
        </div>
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
</body>
