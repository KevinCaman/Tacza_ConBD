<?php
class ConectarBaseDatos
{
    protected function conecta()
    {
        $host = 'localhost';
        $usuario = 'root';
        $contrasena = '12345678';
        $baseDatos = 'comanda';

        $conexion = new mysqli($host, $usuario, $contrasena, $baseDatos);
        if ($conexion->connect_error) {
            die('Error de conexión: ' . $conexion->connect_error);
        }
        return $conexion;
    }

    protected function desconecta($conexion)
    {
        $conexion->close();
    }
}
?>