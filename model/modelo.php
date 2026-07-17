<?php

class Modelo
{
    public $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function listarProductos()
    {
        $sql = "SELECT * FROM productos";
        $resultado = $this->conexion->query($sql);

        return $resultado;
    }

    public function insertarProducto($nombre, $categoria, $precio, $stock, $descripcion)
    {
        $sql = "INSERT INTO productos(nombre,categoria,precio,stock,descripcion)
                VALUES ('$nombre','$categoria','$precio','$stock','$descripcion')";

        return $this->conexion->query($sql);
    }

    public function obtenerProducto($id)
    {
        $sql = "SELECT * FROM productos WHERE id=$id";
        return $this->conexion->query($sql);
    }

    public function actualizarProducto($id, $nombre, $categoria, $precio, $stock, $descripcion)
    {
        $sql = "UPDATE productos SET
                nombre='$nombre',
                categoria='$categoria',
                precio='$precio',
                stock='$stock',
                descripcion='$descripcion'
                WHERE id=$id";

        return $this->conexion->query($sql);
    }

    public function eliminarProducto($id)
    {
        $sql = "DELETE FROM productos WHERE id=$id";
        return $this->conexion->query($sql);
    }
}

?>