<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lista Productos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="../Controller/ControllerProducto.php" method="POST"> 

       <table>
            <thead>
                <td>id</td>
                <td>nombre</td>
                <td>modelo</td>
                <td>marca</td>
                <td>color</td>
                <td>talla</td>
                <td>precio</td>
            </thead>
            <tbody>
                <?php
                foreach($listaProducto as $producto){
                    echo "<tr>";
                    echo "<td>".$producto['id']."</td>";
                    echo "<td>".$producto['nombre']."</td>";
                    echo "<td>".$producto['modelo']."</td>";
                    echo "<td>".$producto['marca']."</td>";
                    echo "<td>".$producto['color']."</td>";
                    echo "<td>".$producto['talla']."</td>";
                    echo "<td>".$producto['precio']."</td>";
                    echo "</tr>";
                } // nose porque no se muestran los datos, pero en la base de datos PHPMyADMIN si inserta datos, borra, modifica y muestra los datos correctamente
                ?>
            </tbody>
        </table>
</html>
