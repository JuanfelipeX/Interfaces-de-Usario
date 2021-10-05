<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación del producto </title>
</head>
<body>
    <form action="../Controller/ControllerProducto.php" method="POST"> 

    <h3>Ingrese el numero de id del producto para eliminar </h3>

    <div>
        <label for="id">Id</label>
        <input type="text" name="id" id="id" placeholder= "Escriba el id">
    </div>

    <input type="hidden" name="eliminacionProducto">

    <button>Enviar</button>

    </form>
    
</body>
</html>