<?php

require("../Model/Conexion.php");
class Usuarios
{

    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }
    public function getUsuarios()
    {
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

        //$sql = "INSERT INTO usuarios('usuario','clave','nombre') 
        //Values($usuario,$clave,$nombre);"
        $sql = "INSERT INTO usuarios Values('$usuario','$clave','$nombre')";
        if ($this->con->getCon()->query($sql)) {
            echo "Insercion exitosa";
        } else {
            echo " Error ejecutando consulta de insercion";
            echo "SQL:" . $sql;
        }
    }

    public function deleteUsuario($usuario){
        $sql = "DELETE FROM usuarios WHERE  usuario='$usuario'";
        if ($this->con->getCon()->query($sql)) {

            echo "Eliminación exitosa";
        } else {

            echo "Error ejecutando consulta de eliminación.";

            echo "SQL: " . $sql;
        }
    }

    public function ejemploUpdateUsuario($usuario, $nombre, $clave){
        $sql="UPDATE usuarios SET nombre='$nombre',clave='$clave'
        where usuario='$usuario' ";
        
        if ($this->con->getCon()->query($sql)) {

            echo "actualización exitosa";
        } else {

            echo "Error ejecutando consulta de actualización.";

            echo "SQL: " . $sql;
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