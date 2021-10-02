<?php


///*
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

    public function deleteUsuario($usuario){
        $sql = "DELETE FROM usuarios WHERE usuario= '$usuario'";

         if($this->con->getCon()->query($sql)){
            echo "eliminacion exitosa";

        }else {
            echo "error" .sql;
        }
    }

    public function updateUsuario($usuario, $nombre, $clave){

        $sql="UPDATE usuario SET nombre='$nombre', clave='$clave' WHERE usuario='$usuario'";
        if($this->con->getCon()->query($sql)){
            echo "modificacion exitosa";

        }else {
            echo "error" .sql;
        }
    }
}
//*/

/*

include_once ("Conexion.php");

//Inserccion de datos en las tablas de  pgmolder
class Cpersona{
    function insertar($usuario, $nombre, $clave){
        return pg_query(Connection::conectar(), "INSERT INTO campos_formulario VALUES(default,
                                                                                     '$usuario',
                                                                                     '$nombre',
                                                                                     '$clave')");

    }
}

*/

?>