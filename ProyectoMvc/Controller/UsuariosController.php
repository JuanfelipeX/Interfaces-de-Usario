<?php

require("../Model/Usuarios.php");

$usu = new Usuarios();

if (isset($_POST["registrarse"])) {
    $usu->newUsuario(
        $_POST["usuario"],
        $_POST["nombre"],
        $_POST["clave"]
    );
} else {
    if (isset($_POST["eliminaUsuario"])) {
        $usu->deleteUsuario(
            $_POST["usuario"]
        );
    } else {
        if (isset($_POST["eliminarUsuario"])) {
            $usu->ejemploUpdateUsuario(
                $_POST["usuario"],
                $_POST["nombre"],
                $_POST["clave"]
            );
        } else {
            $listaUsuarios = $usu->getUsuarios();
            require("../Views/VistaListaUsuarios.php");
        }
    }
}
//$usu->newUsuario('pepito', 'Pepe', '123');

//*/

/*
require_once '../Model/Conexion.php';
require_once '../Model/Usuarios.php';

    if(isset($_POST["registrarse"])){
    $usuario=$_POST["usuario"];
    $nombre=$_POST["nombre"];
    $clave=$_POST["clave"];

    $obj = new Cpersona();
    $obj->insertar($usuario, $nombre, $clave);
    require("../Views/VistaListaUsuarios.php"); 

}

*/
?>
