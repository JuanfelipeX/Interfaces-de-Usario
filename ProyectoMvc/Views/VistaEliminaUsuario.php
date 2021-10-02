<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/UsuariosController.php" method="post">
    <div>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
    </div>

    <input type="hidden" name="eliminarUsuario">
    <button>Enviar</button>
    
    </form>
    
    
</body>
</html>