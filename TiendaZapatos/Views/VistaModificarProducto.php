<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Producto </title>
</head>
<body>
    <form action="../Controller/ControllerProducto.php" method="POST"> 

    <div>
        <label for="id">Id</label>
        <input type="text" name="id" id="id" placeholder= "Escriba el id">
    </div>

    <H3>Rellene los siguientes datos para modificar</H3>

     <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder= "Escriba el nombre">
    </div>

    <div>
        <label for="modelo">Modelo</label>
        <input type="modelo" name="modelo" id="modelo" placeholder= "Escriba el modelo">
    </div>

     <div>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" placeholder= "Escriba la marca">
    </div>

    <div>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" placeholder= "Escriba el color">
    </div>

    <div>
        <label for="talla">Talla</label>
        <input type="text" name="talla" id="talla" placeholder= "Escriba la talla">
    </div>

     <div>
        <label for="precio">Pecio</label>
        <input type="text" name="precio" id="precio" placeholder= "Escriba el precio">
    </div>

    <input type="hidden" name="modificarProducto">

    <button>Enviar</button>

    </form>
    
</body>
</html>