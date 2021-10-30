<?php
include ("header.php");
?>

    <form action="../Controller/UsuariosController.php" method="POST">

    <div class="form-group">
      <label for="usuario" class="form-label mt-4">Escriba su usuario</label>
      <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="Escriba su usuario">
      <small id="usuario" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label for="nombre" class="form-label mt-4">Escriba su nombre</label>
      <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Escriba su nombre">
      <small id="nombre" class="form-text text-muted"></small>
    </div>

  
    <div class="form-group">
      <label for="clave" class="form-label mt-4">Escriba su clave</label>
      <input type="password" class="form-control" id="clave" aria-describedby="emailHelp" placeholder="Escriba su clave">
      <small id="clave" class="form-text text-muted"></small>
    </div>

    <input type="hidden" name="registrarse">

    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    <?php
include("footer.php");
?>