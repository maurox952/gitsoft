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
            height: 500px;
            padding: 1rem;
            margin: 0.5rem;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .tarjeta2{
            border-radius: 0.5rem;
            height: 550px;
            margin: 0.5rem;
            padding: 1rem;
            background-color: #FFFFFF;
        }

        .tarjeta2 img{
            border-right: 4px solid #0149B6;
            border-left: 4px solid #0149B6;
            box-shadow: 0 4px 6px 1px gray;
        }

        .titulo-tarjeta{
            color: #00ACF8;
        }

        .texto-tarjeta{
            font-size: 15px;
        }

        .img-tarjeta{
            margin-bottom: 1rem;
        }

        .img-tarjeta2{
            margin-bottom: 1rem;
        }

        .img-tarjeta2 img{
            width: 200px;
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

        .bg-azul{
            background-color: #0149B6;
            padding: 1rem;
        }

        .overflow{
            height: 100%;
            overflow: scroll;
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
                    <a class="nav-link" href="vistas/login/cerrar_sesion.php">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="banner">
        <img src="img/logo-com.png" alt="Logo">
    </div>

    <section class="container text-center mt-5">
        <div class="titulo1">
            <h2>Nuestro modelo de negocio</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tarjeta">
                    <div class="titulo-tarjeta">
                        <h4>Se enfoca en</h4>
                    </div>
                    <div class="texto-tarjeta">
                        <p>Generar una experiencia de respaldo y tranquilidad a empresarios y cultura organizacional en colaboradores por medio de acompañamiento permanente con el objetivo de integrar las áreas al interior de la Compañía y los Sistemas de Gestión, facilitando el entendimiento normativo.</p>
                        <a href="#"><button class="boton">Leer más</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tarjeta">
                    <div class="img-tarjeta">
                        <img src="img/manos.png" alt="Manos" width="60%">
                    </div>
                    <div class="texto-tarjeta">
                        <p>Nuestra legislación, la evolución de los mercados internacionales y las características de los actuales mercados laborales hacen que se generen nuevas necesidades en materia de ​certificación y de licenciamiento ​bajo escenarios de ​tipo ambiental, laboral y de calidad ​ que son usualmente conocidos como Sistemas Integrados de Gestión (SIG).</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tarjeta">
                    <div class="titulo-tarjeta">
                        <h4>Continuamente</h4>
                    </div>
                    <div class="texto-tarjeta">
                        <p>Se generan restricciones normativas, técnicas y comerciales frente a las cuales se hace insuficiente la gestión del riesgo para mitigar, reducir o eliminar situaciones indeseadas como multas y sanciones que ponen en peligro la continuidad del negocio. Es por ello que las empresas requieren de personal profesional interno o externo que acompañe la gestión que exigen el gobierno a través de todas sus normas de obligatorio cumplimiento, servicios que suelen brindarse en el mercado por separado y para cada área en Salud y seguridad en el trabajo (SG-SST), Ambiental (SGA) y Buenas prácticas de manufactura y fabricación (BPM-BPF), solución que es atendida por Gisot Consultores al integrar, diseñar, implementar, mantener y mejorar las áreas antes descritas en un mismo servicio de asesoría y consultoría de forma eficiente y eficaz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center mt-5 bg-azul">
        <div class="titulo2">
            <h2>Soluciones normativas</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="tarjeta2">
                    <div class="img-tarjeta2">
                        <img src="img/tarjeta1.jpg" alt="Manos" width="60%">
                    </div>
                    <div class="titulo-tarjeta">
                        <h4> Salud y seguridad en el trabajo</h4>
                    </div>
                    <div class="texto-tarjeta">
                        <p>Regulado por el Ministerio de Trabajo bajo el Decreto 1072 de 2015 y la Resolución 0312 de 2019 .</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="tarjeta2">
                    <div class="img-tarjeta2">
                        <img src="img/tarjeta2.jpg" alt="Manos" width="60%">
                    </div>
                    <div class="titulo-tarjeta">
                        <h4>Gestión Ambiental</h4>
                    </div>
                    <div class="texto-tarjeta">
                        <p>Regulado por el Ministerio de Ambiente y Desarrollo Sostenible bajo el Decreto 1076 de 201</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="tarjeta2">
                    <div class="img-tarjeta2">
                        <img src="img/tarjeta3.jpg" alt="Manos" width="60%">
                    </div>
                    <div class="titulo-tarjeta">
                        <h4>Buenas Prácticas de Manufactura y Fabricación</h4>
                    </div>
                    <div class="texto-tarjeta">
                        <p>Regulado por el Ministerio de Salud,  Protección Social y el INVIMA bajo la Resolución 2674 de 2013 y Resolución 683 de 2012.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="tarjeta2">
                    <div class="img-tarjeta2">
                        <img src="img/tarjeta4.jpg" alt="Manos" width="60%">
                    </div>
                    <div class="titulo-tarjeta">
                        <h4>Normas Técnicas Colombianas NTC ISO</h4>
                    </div>
                    <div class="texto-tarjeta">
                        <p>No son de obligatorio cumplimiento, sin embargo, son un diferencial en el mercado para aquellas empresas que se certifiquen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container text-center mt-5">
        <div class="titulo1">
            <h2>Testimonios</h2>
        </div>
    </section>

    <section class="text-center mt-5 bg-azul">
        <div class="titulo2">
            <h2>Sobre nuestra compañia</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tarjeta2">
                    <div class="img-tarjeta">
                        <img src="img/equipo1.jpeg" alt="Manos" width="60%">
                    </div>
                    <div class="texto-tarjeta">
                        <ul>
                            <li>Minimizamos reprocesos y enfocamos esfuerzos.</li>
                            <li>Trabajamos en equipo enfocados en el cumplimiento de objetivos.</li>
                            <li>Fomentamos y mantenemos la cultura empresarial.</li>
                            <li>Formamos, capacitamos y sensibilizamos el personal.</li>
                            <li>Aportamos a la viabilidad financiera y sostenibilidad empresarial.</li>
                            <li>Prevenimos factores de riesgo ante posibles sanciones.</li>
                        </ul>
                        <a href="#"><button class="boton">Leer más</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tarjeta2">
                    <div class="img-tarjeta">
                        <img src="img/equipo2.jpeg" alt="Manos" width="60%">
                    </div>
                    <div class="texto-tarjeta">
                        <p>Entregamos a nuestros aliados asesoría y consultoría eficiente, a través de nuestro equipo de profesionales idóneos y certificados, brindando a la gerencia y a su equipo la toma de decisiones oportunas alineadas a la visión estratégica del negocio, la integración de las áreas, la consecución de nuevos clientes y la permanencia en el mercado, en pro de la prevención de factores de riesgo a posibles sanciones en general y de organismos de control, aportando a la viabilidad financiera y la sostenibilidad empresarial.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tarjeta2">
                    <div class="texto-tarjeta overflow">
                        <a class="twitter-timeline" href="https://twitter.com/gisotconsultor?ref_src=twsrc%5Etfw">Tweets by gisotconsultor</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="my-3 my-lg-0 text-lg-center text-center">
                    <a class="redes btn btn-social mx-3" href="https://twitter.com/gisotconsultor" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="redes btn btn-social mx-3" href="https://www.facebook.com/gisotconsultor"><i class="fab fa-facebook-f" target="_blank"></i></a>
                    <a class="redes btn btn-social mx-3" href="https://www.instagram.com/gisotconsultor/"><i class="fab fa-instagram" target="_blank"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>