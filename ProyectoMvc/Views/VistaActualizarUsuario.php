<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/UsuariosController.php" method="POST">

    <div>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" placeholder= "Escriba su usuario">
    </div>

     <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder= "Escriba su nombre">
    </div>

     <div>
        <label for="clave">Clave</label>
        <input type="password" name="clave" id="clave" placeholder= "Escriba su clave">
    </div>

    <input type="hidden" name="actualizaUsuario">

    <button>Enviar</button>

    </form>
    
</body>
</html>