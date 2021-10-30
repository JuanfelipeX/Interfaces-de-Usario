<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar - Menu -->
        <nav id="sidebar" class="bg-primary">
            <div class="sidebar-header">
                <h3>You need a Car?</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu Principal</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Únete</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../Controller/UsuariosController.php">Iniciar sesión</a>
                        </li>
                        <li>
                            <a href="VistaNuevoUsuario.php">Registrarse</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contáctanos</a>
                </li>
                <li>
                    <a href="#">Términos y condiciones</a>
                </li>
                <li>
                    <a href="#">Conócenos</a>
                </li>
            </ul>
        </nav>
        <!--Content-->

        <div id="content" class="container-fluid">
            <div class="row"><!--nuevo-->
                <div class="col-3"><!--nuevo-->
                    <nav class="">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">

                            <i class="fas fa-chevron-left" id="arrow1"></i>
                        </button>
                    </nav>
                </div>
            </div>