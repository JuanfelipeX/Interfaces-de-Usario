<?php

require("../Model/Producto.php");

$usu = new Producto();

if (isset($_POST["compraProducto"])) {
    $usu->nuevoProducto(
        $_POST["id"],
        $_POST["nombre"],
        $_POST["modelo"],
        $_POST["marca"],
        $_POST["color"],
        $_POST["talla"],
        $_POST["precio"]
    );
} else {
    if (isset($_POST["eliminacionProducto"])) {
        $usu->venderProducto(
            $_POST["id"]
        );
    } else {
        if (isset($_POST["modificarProducto"])) {
            $usu->modificacionProducto(
                $_POST["id"],
                $_POST["nombre"],
                $_POST["modelo"],
                $_POST["marca"],
                $_POST["color"],
                $_POST["talla"],
                $_POST["precio"]
            );
        } else {
            $listaProductos = $usu->getProducto();
            require("../Views/VistaConsultarProducto.php");
        }
    }
}

?>