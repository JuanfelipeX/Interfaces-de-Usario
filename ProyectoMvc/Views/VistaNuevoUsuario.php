<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/UsuariosController.php" method="POST"></form>

    <div>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="user" placeholder= "Escriba su usuario">
    </div>

     <div>
        <label for="name">Nombre</label>
        <input type="text" name="nombre" id="name" placeholder= "Escriba su nombre">
    </div>

     <div>
        <label for="password">Clave</label>
        <input type="text" name="password" id="clave" placeholder= "Escriba su clave">
    </div>

    <input type="hidden" name="nuevoUsuario">

    <button>Enviar</button>
    
</body>
</html>