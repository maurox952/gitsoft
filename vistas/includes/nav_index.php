<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-sm-3">
            <a class="navbar-brand" href="<?php echo $URL ?>">
                <img src="<?php echo $URL ?>img/logo-text.png" alt="Logo" width="100" height="50">
            </a>
        </div>

        <button class="navbar-toggler col-sm-3 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav hola ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="<?php echo $URL ?>">Incio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>vistas/quienes/quienes_somos.php">Quiénes somos</a>
                    <!-- <a class="nav-link" href="Cliente/login/frm_login.php">Iniciar Sesion</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>/vistas/servicios/servicios.php">Nuestros servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>/vistas/contactenos/contacto.php">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $URL ?>/vistas/login/login.php">Inicar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>