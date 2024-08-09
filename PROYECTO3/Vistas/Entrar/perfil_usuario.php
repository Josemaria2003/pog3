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
    <title>Perfil de Usuario</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../Estilos/perfil_usuario.css">
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
                    <li class="nav-item" style = "color: #FFFFFF;">
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

    <div class="container mt-5">
        <h2 class="text-center">Perfil de Usuario</h2>

        <!-- Información del Usuario -->
        <div class="card mb-4">
            <div class="card-header">Información Personal</div>
            <div class="card-body">
                <form id="infoUsuarioForm">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_SESSION['user_name']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" value="usuario@example.com" readonly>
                    </div>
                </form>
            </div>
        </div>

        <!-- Cambiar Contraseña -->
        <div class="card mb-4">
            <div class="card-header">Cambiar Contraseña</div>
            <div class="card-body">
                <form id="cambiarContrasenaForm" method="POST" action="../../Controladores/cambiar_contrasena.php">
                    <div class="form-group">
                        <label for="contrasenaActual">Contraseña Actual</label>
                        <input type="password" class="form-control" id="contrasenaActual" name="contrasenaActual" required>
                    </div>
                    <div class="form-group">
                        <label for="nuevaContrasena">Nueva Contraseña</label>
                        <input type="password" class="form-control" id="nuevaContrasena" name="nuevaContrasena" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmarContrasena">Confirmar Nueva Contraseña</label>
                        <input type="password" class="form-control" id="confirmarContrasena" name="confirmarContrasena" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                </form>
            </div>
        </div>

        <!-- Avatares Creados -->
        <div class="card">
            <div class="card-header">Mis Avatares</div>
            <div class="card-body">
                <div class="row" id="avataresCreados">
                    <!-- Aquí se cargarán dinámicamente los avatares creados por el usuario -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch('../../Controladores/obtener_avatares.php')
            .then(response => response.json())
            .then(avatares => {
                const avataresCreados = document.getElementById('avataresCreados');
                avatares.forEach(avatar => {
                    const avatarCol = document.createElement('div');
                    avatarCol.classList.add('col-md-4');
                    avatarCol.innerHTML = `
                        <div class="card mb-4">
                            <img src="../../img/${avatar.imagen_resultado}" class="card-img-top" alt="${avatar.titulo}">
                            <div class="card-body">
                                <h5 class="card-title">${avatar.titulo}</h5>
                                <p class="card-text">${avatar.accesorios}</p>
                                <p class="card-text"><small class="text-muted">Creado el ${new Date(avatar.fecha_creacion).toLocaleDateString()}</small></p>
                            </div>
                        </div>
                    `;
                    avataresCreados.appendChild(avatarCol);
                });
            });
    });
    </script>
</body>

</html>
