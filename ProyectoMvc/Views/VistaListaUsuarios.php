<?php
include ("header.php");
?>

<table  class="table table-hover">
    
            <thead>
                <th scope= "col">usuario</th>
                <th scope= "col">nombre</th>
                <th scope= "col">clave</th>
            </thead>
            <tbody>
                <?php
                foreach($listaUsuarios as $usuario){
                    echo "<tr>";
                    echo "<td>".$usuario['usuario']."</td>";
                    echo "<td>".$usuario['clave']."</td>";
                    echo "<td>".$usuario['nombre']."</td>";
                    echo "</tr>";
                }
                ?>
        </table>
     <?php
include ("footer.php");
?>   
