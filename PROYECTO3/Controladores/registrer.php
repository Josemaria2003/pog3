<?php
require_once '../Modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = 1;

    $sql = "INSERT INTO usuarios (nombre, nombre_usuario, email, password, rol_usuario) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $nombre_usuario, $email, $password, $role);

    if ($stmt->execute()) {
        echo '<script>
                alert("Registro exitoso.");
                window.location.href = "../Vistas/Entrar/login.html";
              </script>';
    } else {
        echo '<script>
                alert("Error al registrar el usuario.");
                window.location.href = "../Entrar/register.html";
              </script>';
    }

    $stmt->close();
    $conn->close();
}
?>
