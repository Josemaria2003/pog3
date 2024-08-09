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

    function Consulta() {
        $.post(
            "../../Controladores/usuariocontroller.php",
            { opcion: "consultar" },
            Respuesta
          );
    }

      function Respuesta(arg) {
        $("#Datos_TablaUsuarios tbody").append(arg);
      }

      // > Cada que se recarge la página, se hace el llamado a la función CargarDatos().
      window.onload = Consulta();
    </script>


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
                        <a class="nav-link" href="./inicioA.php">Leer</a>
                    </li>
                    <li class="nav-item">
                        <a href="actualizarusuario.php" class="btn" style = "color: #FFFFFF">Actualizar</a>
                    </li>
                    <li class="nav-item">
                        <a href="eliminarusuario.php" class="btn" style = "color: #FFFFFF">Eliminar</a>
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

    <div class="container text-center my-3 shadow-lg p-3">
        <div class="row">
          <div class="col">
            <!--Tabla: Usuarios-->
            <br><h5 class="text-success fw-bolder">USUARIOS CON CUENTA EN AVATIX</h5><br>
            <table id="Datos_TablaUsuarios" class="table table-bordered table-comments">
              <thead>
                <tr class="table-success">
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Nombre del Usuario</th>
                  <th scope="col">Email</th>
                  <th scope="col">Rol</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
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

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
