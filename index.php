<?php
    include "conexion/conexion.php";

    session_start();
        if(!isset($_SESSION['rol'])){
            include 'vistas/includes/nav_index.php';
        }else{
            if($_SESSION['rol'] ==1 ){
                include 'vistas/includes/nav_admin.php';
            }
        }

?>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body class="bg-index">
        <div class="banner">
            <img src="img/logo-com.png" alt="Logo">
        </div>

        <section class="container text-center mt-5">
            <div class="text-center my-4" style="color: #00acf8;">
                <h2>Nuestro modelo de negocio</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="tarjeta">
                        <div class="titulo-tarjeta">
                            <h4>Se enfoca en</h4>
                        </div>
                        <div class="texto-tarjeta">
                            <p>Generar una experiencia de respaldo y tranquilidad a empresarios y cultura organizacional en colaboradores por medio de acompañamiento permanente con el objetivo de integrar las áreas al interior de la Compañía y los Sistemas
                                de Gestión, facilitando el entendimiento normativo.</p>
                            <a href="#"><button class="boton">Leer más</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="tarjeta">
                        <div class="img-tarjeta mb-1">
                            <img src="img/manos.png" alt="Manos" width="60%">
                        </div>
                        <div class="texto-tarjeta">
                            <p>Nuestra legislación, la evolución de los mercados internacionales y las características de los actuales mercados laborales hacen que se generen nuevas necesidades en materia de ​certificación y de licenciamiento ​bajo escenarios
                                de ​tipo ambiental, laboral y de calidad ​ que son usualmente conocidos como Sistemas Integrados de Gestión (SIG).</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="tarjeta" style="height: auto;">
                        <div class="titulo-tarjeta">
                            <h4>Continuamente</h4>
                        </div>
                        <div class="texto-tarjeta">
                            <p>Se generan restricciones normativas, técnicas y comerciales frente a las cuales se hace insuficiente la gestión del riesgo para mitigar, reducir o eliminar situaciones indeseadas como multas y sanciones que ponen en peligro
                                la continuidad del negocio. Es por ello que las empresas requieren de personal profesional interno o externo que acompañe la gestión que exigen el gobierno a través de todas sus normas de obligatorio cumplimiento, servicios
                                que suelen brindarse en el mercado por separado y para cada área en Salud y seguridad en el trabajo (SG-SST), Ambiental (SGA) y Buenas prácticas de manufactura y fabricación (BPM-BPF), solución que es atendida por Gisot
                                Consultores al integrar, diseñar, implementar, mantener y mejorar las áreas antes descritas en un mismo servicio de asesoría y consultoría de forma eficiente y eficaz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center mt-5 bg-azul">
            <div class="text-center my-4" style="color: #FFFFFF;">
                <h2>Soluciones normativas</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="tarjeta2">
                        <div class="img-tarjeta2 mb-1">
                            <img src="img/tarjeta1.jpg" alt="Manos" width="60%" height="">
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
                            <p>Regulado por el Ministerio de Salud, Protección Social y el INVIMA bajo la Resolución 2674 de 2013 y Resolución 683 de 2012.</p>
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
            <div class="text-center my-4" style="color: #00acf8;">
                <h2>Testimonios</h2>
            </div>
        </section>

        <section class="text-center mt-5 bg-azul">
            <div class="text-center my-4" style="color: #FFFFFF;">
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
                            <p>Entregamos a nuestros aliados asesoría y consultoría eficiente, a través de nuestro equipo de profesionales idóneos y certificados, brindando a la gerencia y a su equipo la toma de decisiones oportunas alineadas a la visión
                                estratégica del negocio, la integración de las áreas, la consecución de nuevos clientes y la permanencia en el mercado, en pro de la prevención de factores de riesgo a posibles sanciones en general y de organismos de control,
                                aportando a la viabilidad financiera y la sostenibilidad empresarial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="tarjeta2">
                        <div class="texto-tarjeta overflow">
                            <a class="twitter-timeline" href="https://twitter.com/gisotconsultor?ref_src=twsrc%5Etfw">Tweets by gisotconsultor</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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

        <!-- JS BOOSTSTRAP -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>