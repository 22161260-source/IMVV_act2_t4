<?php

include("config/conexion.php");
include("model/modelo.php");

$modelo = new Modelo($conexion);

/* ============================
   NUEVO PRODUCTO
============================ */

if (isset($_GET["accion"]) && $_GET["accion"] == "nuevo") {

    if (isset($_POST["guardar"])) {

        $modelo->insertarProducto(
            $_POST["nombre"],
            $_POST["categoria"],
            $_POST["precio"],
            $_POST["stock"],
            $_POST["descripcion"]
        );

        header("Location: index.php");
        exit();
    }

    include("views/formulario.php");
    exit();
}

/* ============================
   EDITAR PRODUCTO
============================ */

if (isset($_GET["accion"]) && $_GET["accion"] == "editar") {

    $id = $_GET["id"];

    if (isset($_POST["actualizar"])) {

        $modelo->actualizarProducto(
            $_POST["id"],
            $_POST["nombre"],
            $_POST["categoria"],
            $_POST["precio"],
            $_POST["stock"],
            $_POST["descripcion"]
        );

        header("Location: index.php");
        exit();
    }

    $resultado = $modelo->obtenerProducto($id);
    $producto = $resultado->fetch_assoc();

    include("views/editar.php");
    exit();
}

/* ============================
   ELIMINAR PRODUCTO
============================ */

if (isset($_GET["accion"]) && $_GET["accion"] == "eliminar") {

    $modelo->eliminarProducto($_GET["id"]);

    header("Location: index.php");
    exit();
}

/* ============================
   LISTAR PRODUCTOS
============================ */

$productos = $modelo->listarProductos();

?>