<?php

$conexion = new mysqli("localhost", "root", "1981", "crud_productos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");

?>