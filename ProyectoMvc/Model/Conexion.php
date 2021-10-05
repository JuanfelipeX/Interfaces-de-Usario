<?php

/*
class Conexion{
    public static function conectar(){
        try {
            $con = pg_connect("host=127.0.01
                               port=5432
                               dbname=DU-Class
                               user=postgres
                               password=juanfelipe44") or die ('no se ha podido conectar: ' .pg_last_error());
            return $con;

        } catch (Exception $e) {
            echo $e -> getMessage();
        }
    }
}

*/

class Conexion  {
    private $con;
    function __construct()
    {
        $this->con = new mysqli("localhost", "root", "", "ProyectoMvc");
    }

    function getCon()
    {
        return $this->con;
    }
}

?>
