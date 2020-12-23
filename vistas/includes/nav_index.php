<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JS BOOSTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .banner{
            padding: 1rem;
            width: 100%;
            height: 50vh;
            box-shadow: 0 0.5px 30px 5px #888888;
            background-color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .banner img{
            height: 100%;
        }

        .bg-index {
            background-image: radial-gradient(circle at 40% 91%, rgba(251, 251, 251, 0.045) 0%, rgba(251, 251, 251, 0.045) 50%, rgba(229, 229, 229, 0.045) 50%, rgba(229, 229, 229, 0.045) 100%), radial-gradient(circle at 66% 97%, rgba(36, 36, 36, 0.045) 0%, rgba(36, 36, 36, 0.045) 50%, rgba(46, 46, 46, 0.045) 50%, rgba(46, 46, 46, 0.045) 100%), radial-gradient(circle at 86% 7%, rgba(40, 40, 40, 0.045) 0%, rgba(40, 40, 40, 0.045) 50%, rgba(200, 200, 200, 0.045) 50%, rgba(200, 200, 200, 0.045) 100%), radial-gradient(circle at 15% 16%, rgba(99, 99, 99, 0.045) 0%, rgba(99, 99, 99, 0.045) 50%, rgba(45, 45, 45, 0.045) 50%, rgba(45, 45, 45, 0.045) 100%), radial-gradient(circle at 75% 99%, rgba(243, 243, 243, 0.045) 0%, rgba(243, 243, 243, 0.045) 50%, rgba(37, 37, 37, 0.045) 50%, rgba(37, 37, 37, 0.045) 100%), linear-gradient(90deg, rgb(245, 255, 230), rgb(231, 248, 255));
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
        }

        .titulo1{
            color: #00acf8;
            margin: 2rem;
        }

        .titulo2{
            color: #FFFFFF;
            margin: 2rem; 
        }

        .tarjeta{
            border-radius: 0.5rem;
            height: 60vh;
            padding: 1rem;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .tarjeta2{
            border-radius: 0.5rem;
            height: 80vh;
            padding: 1rem;
            background-color: #FFFFFF;
        }

        .titulo-tarjeta{
            color: #00acf8;
        }

        .texto-tarjeta{
            font-size: 15px;
        }

        .img-tarjeta{
            margin-bottom: 1rem;
        }

        .boton{
            background-color: #0149B6;
            text-decoration: none;
            color: #FFFFFF;
            width: 125px;
            height: 50px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 6px 0 0 #0198B0;
        }

        .boton:hover{
            background-color: #145FD0;
        }

        .soluciones{
            background-color: #0149B6;
            padding: 1rem;
        }
    </style>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="bg-index">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo-text.png" alt="Logo" width="100" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#">Incio</a>
                    <a class="nav-link" href="#">Quiénes somos</a>
                    <a class="nav-link" href="#">Nuestros servicios</a>
                    <a class="nav-link" href="#">Clientes</a>
                    <a class="nav-link" href="#">Contáctanos</a>
                    <a class="nav-link" href="<?php echo $URL ?>/vistas/login/login.php">Inicar sesión</a>
                </div>
            </div>
        </div>
    </nav>
    </body>
    </html>