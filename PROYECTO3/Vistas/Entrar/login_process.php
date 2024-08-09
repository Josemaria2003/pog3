<?php
session_start();
require_once '../../Modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nombre'];
            $_SESSION['user_role'] = $user['rol_usuario'];
            
            if($_SESSION['user_role'] == '1'){
                header('Location: ../Entrar/inicioL.php');
            } else {
                header('Location: ../Entrar/inicioA.php');
            }

            
            exit();
        } else {
            echo '<script>
                    alert("Contraseña incorrecta.");
                    window.location.href = "../Entrar/login.html";
                  </script>';
        }
    } else {
        echo '<script>
                alert("Correo electrónico no encontrado.");
                window.location.href = "../Entrar/login.html";
              </script>';
    }

    $stmt->close();
    $conn->close();
}
?>
