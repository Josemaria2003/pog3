<?php
require_once("../modelo/Usuarios.php");
$objUsuarios = new Usuarios;

switch($_POST['opcion'])
{
    case 'consultar':
        $datos = $objUsuarios->ObtenerTodos();
        $tabla = "";
        
        foreach($datos as $fila)
        {
            $tabla .= "<tr>";
            $tabla .= "<td>" . $fila['id'] . "</td>";
            $tabla .= "<td>" . $fila['nombre'] . "</td>";
            $tabla .= "<td>" . $fila['nombre_usuario'] . "</td>";
            $tabla .= "<td>" . $fila['email'] . "</td>";
            $tabla .= "<td>" . $fila['rol_usuario'] . "</td>";
        }
        echo $tabla;
        break;
    
    case 'ingresar':
        $datos['nombre'] = $_POST['nombre'];
        $datos['nombre_usuario'] = $_POST['nombre_usuario'];
        $datos['email'] = $_POST['email'];
        $datos['password'] = $_POST['password']; // Asegúrate de encriptar la contraseña antes de guardarla
        $datos['fecha_registro'] = date('Y-m-d H:i:s');
        $datos['rol_usuario'] = $_POST['rol_usuario'];
        
        if ($objUsuarios->nuevo($datos))
        {
            echo "Registro ingresado";
        }
        else
        {
            echo "Error al registrar: " . $objUsuarios->geterror();
        }
        break;
    
    case 'actualizar':
        $filtro['id'] = $_POST['id'];
        $datos['nombre'] = $_POST['nombre'];
        $datos['nombre_usuario'] = $_POST['nombre_usuario'];
        $datos['email'] = $_POST['email']; 
        echo $objUsuarios->Guardar($datos, $filtro);
        break;
    
    case 'consultaxcodigo':
        $filtro['id'] = $_POST['id'];
        echo json_encode($datos = $objUsuarios->ObtenerFiltro($filtro));
        break;
    
    case 'eliminar':
        $filtro['id'] = $_POST['id'];
        if ($objUsuarios->Eliminar($filtro)) {
            echo "Registro eliminado";
        } else {
            echo "Error al eliminar: " . $objUsuarios->geterror();
        }
        break;
}
?>