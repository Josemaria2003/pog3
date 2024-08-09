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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../Estilos/personalizados.css">
    <script type="text/javascript" src="../../JS/jquery-3.4.1.min.js"></script>

<!--Funciones JavaScript-->
<script type="text/javascript">

function ActualizarDatos() {
        $.post(
          "../../Controladores/usuariocontroller.php",
          $("#form_datos").serialize(),
          Respuesta
        );
        form_datos.reset();
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

      <br>
      <div class="container mt-5">
        <div class="card mi-card">
            <div class="card-body">
                <h2 class="text-center"><strong>Actualizar Usuario</strong></h2>
                
                <form id="form_datos">
                <input
                    class="form-control"
                    name="opcion"
                    type="text"
                    value="actualizar"
                    hidden
                />
              <div class="form-group">
                        <label for="nombre">ID</label>
                        <input type="text" class="form-control" id="id" name="id" required>
                    </div>      
              <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre_usuario">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div style = "align-items: center; justify-content: center; text-align: center;">
                    <button class="btn btn-success text-white me-2" type="button" onclick="ActualizarDatos();"><b>Actualizar</b></button>
                        
                    </div>
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


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Tu script personalizado -->
    <script>
        function ActualizarDatos() {
            $.post(
                "../../Controladores/usuariocontroller.php",
                $("#form_datos").serialize(),
                Respuesta
            );
            $("#form_datos")[0].reset();
        }

        function Respuesta(arg) {
            alert(arg);
        }
    </script>
</body>


</html>
