<?php

require("../Model/Conexion.php");

class Producto{

    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }
    
    public function getProducto()
    {
        $query = $this->con->getCon()->query("SELECT * FROM productos");
        $productos = [];
        $cont = 0;
        while ($fila = $query->fetch_assoc()) {
            $productos[$cont] = $fila;
            $cont++;
        }
        return $productos;
    }

    public function nuevoProducto($id, $nombre, $modelo, $marca, $color, $talla, $precio){

        $sql = "INSERT INTO productos VALUES('$id','$nombre','$modelo','$marca','$color','$talla','$precio')";
        if ($this->con->getCon()->query($sql)) {
            echo "Insercion exitosa";
        } else {
            echo " Error ejecutando consulta de insercion";
            echo "SQL:" . $sql;
        }
    }

    public function venderProducto($id){
        $sql = "DELETE FROM productos WHERE id='$id'";
        if ($this->con->getCon()->query($sql)) {

            echo "Eliminación exitosa";
        } else {

            echo "Error ejecutando consulta de eliminación.";
            echo "SQL: " . $sql;
        }
    }

    public function modificacionProducto($id, $nombre, $modelo, $marca, $color, $talla, $precio){
        $sql="UPDATE productos SET nombre='$nombre', modelo='$modelo', marca='$marca', color='$color' , talla='$talla', precio='$precio'
        WHERE id='$id' ";
        
        if ($this->con->getCon()->query($sql)) {

            echo "actualización exitosa";
        } else {

            echo "Error ejecutando consulta de actualización.";
            echo "SQL: " . $sql;
        }
    }
}

?>