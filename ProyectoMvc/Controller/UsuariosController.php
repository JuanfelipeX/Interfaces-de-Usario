<?php
require("./Model/Usuarios.php");

$usu = new Usuarios();

if(isset($_POST["nuevoUsuario"])){
$usu->newUsuario($_POST["nuevoUsuario"],
                 $_POST["usuario"],
                 $_POST["nombre"],
                 $_POST["clave"]
                );
} else{
    $listaUsuarios = $usu->getUsuarios();
    require("../Views/VistaListaUsuarios.php"); 
}

//$usu->newUsuario('pepito', 'Pepe', '123');

?>