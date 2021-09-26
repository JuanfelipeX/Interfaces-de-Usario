<?php
class Conexion{
    private $con;

    function __construct(){
        $this-> new mysqli("localhost", "root", "juanfelipe44", "proyectoMvc");
    }
    
    function getCon(){
        return $this->con;
    }
}
?>