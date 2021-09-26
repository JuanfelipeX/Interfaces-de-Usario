<?php

require("./Model/conexion.php"); //especie de import 
class Usuarios{

    private $con;

    function __construct(){
        $this-> = new Conexion();
    }

    public function getUsuarios(){
        
        $query = $this->con->getCon()->query("SELECT * FROM usuarios");
        $usuarios = [];
 
        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $usuarios[$cont] = $fila;
            $cont++;
        }
        return $usuarios;
    }

    public function newUsuario($usuario, $nombre, $clave){
        $sql = "INSERT INTO usuarios (usuario, clave, nombre)
        VALUES ('$usuario', '$clave', '$nombre')";

        if($this->con->getCon()->query($sql)){
            echo "inserccion exitosa";

        }else {
            echo "error";
        }
    }
}

?>