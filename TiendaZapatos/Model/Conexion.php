<?php

class Conexion{

    private $con;

    public function __construct(){

        $this->con = new mysqli('localhost' , 'root' , '' , 'tiendazapatos');
    }

    function getCon()
    {
        return $this->con;
    }
}

?>