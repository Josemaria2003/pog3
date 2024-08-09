<?php
require_once("conexion.php");

Class Usuarios
{
    public function ObtenerTodos()
    {   
        $conexion = new conexion;
        $usuarios = $conexion->consultar('usuarios');
        return $usuarios;
    }

    public function nuevo($datos)
    {   
        $conexion = new conexion;
        $usuarios = $conexion->insertar('usuarios', $datos);
        return $usuarios;
    }

    public function Guardar($datos, $filtro)
    {   
        $conexion = new conexion;
        $usuarios = $conexion->actualizar('usuarios', $datos, $filtro);
        return $usuarios;
    }

    public function ObtenerFiltro($filtro)
    {
        $conexion = new conexion;
        $usuarios = $conexion->consultarFiltro('usuarios', $filtro);
        return $usuarios;
    }
    
    public function Eliminar($filtro)
    {
        $conexion = new conexion;
        $usuarios = $conexion->eliminar('usuarios', $filtro);
        return $usuarios;
    }
}
?>