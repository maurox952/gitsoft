<?php
    include "../../conexion/conexion.php";

    session_start();
        if(!isset($_SESSION['rol'])){
            include '../includes/nav_index.php';
        }else{
            if($_SESSION['rol'] ==1 ){
                include '../includes/nav_admin.php';
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

        <link rel="stylesheet" href="../../css/estilos.css">
    </head>

    <body class="bg-index">
        <div class="text-center my-4" >
            <h1>Nuestros servicios</h1>
        </div>
        <section class="container text-center mt-5">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12" style="display: flex; align-items: center; justify-content: center;">
                    <img src="../../img/equipo3.jpeg" alt="Equipo">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="texto-tarjeta" style="text-align: left;">
                        <h3>Lo que usted necesita</h3>
                        <h6>Facilitamos el entendimiento normativo</h6>
                        <hr style="background-color: #00acf8; height: 1px;">
                        <p style="font-size: 12px;">En Gisot Consultores, sabemos lo ocupado que está haciendo que su Compañía tenga éxito. En lugar de tener que implementar cada norma de obligatorio cumplimiento usted mismo o con su equipo de profesionales que son absorbidos por el día a día en el mantenimiento de las mismas, ¿por qué no enfocarse en el núcleo de su empresa y dejarnos el resto? Contamos con una amplia variedad de profesionales capacitados disponibles a través de nuestra empresa de consultoría que están felices de ayudarlo a quitarle la carga de encima o hacerla más llevadera para que pueda concentrarse en desarrollar su negocio.<br><br>

                        Ofrecemos servicios que incluyen Consultoría por Contrato (Tsigo integrando), Consultoría por demanda (Tsigo acompañando) y Asesoría por demanda (Tsigo asesorando).<br><br>

                        ¿Tiene una necesidad específica que no se menciona en nuestro sitio web? Póngase en contacto con nosotros hoy con sus datos y lo contactaremos con uno de nuestros consultores profesionales altamente capacitados y con experiencia. Hemos manejado diferentes necesidades o enfoques a lo largo de los años y estamos gustosos de ayudarlo con las suyas.</p>
                        <a href="../contactenos/contacto.php"><button class="boton">Contáctanos</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center mt-5 bg-white">
            <div class="container text-center my-4">
                <i class="fas fa-briefcase my-4"></i>
                <h2>Servicios</h2>
                <hr style="background-color: #00acf8; height: 1px; width: 100%;">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tarjeta text-left">
                        <div class="mb-2">
                            <img src="../../img/tsigo1.jpg" alt="Manos" width="100%" height="">
                        </div>
                        <div class="titulo-tarjeta">
                            <h4>Tsigo Integrando</h4>
                        </div>
                        <div class="texto-tarjeta">
                            <h6>Consultoría por contrato</h6>
                            <p>Consultoría en la modalidad de contrato en el diseño, implementación, mantenimiento y mejora de los Sistemas de Gestión de una parte, de cualquiera de ellos o integrándolos; con alcance en evaluaciones diagnósticas, auditorías, atención de auditorías de clientes y entes de control, investigación de accidentes; formación y capacitación.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tarjeta text-left">
                        <div class="mb-2">
                            <img src="../../img/tsigo2.jpg" alt="Manos" width="100%" height="">
                        </div>
                        <div class="titulo-tarjeta">
                            <h4>Tsigo Acompañando</h4>
                        </div>
                        <div class="texto-tarjeta">
                            <h6>Consultoría por demanda</h6>
                            <p>Consultoría en la modalidad de demanda para el acompañamiento en el diseño, implementación, mantenimiento y mejora de los Sistemas de Gestión de una parte, de cualquiera de ellos o integrando los mismos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="tarjeta text-left">
                        <div class="mb-2">
                            <img src="../../img/tsigo3.jpg" alt="Manos" width="100%" height="">
                        </div>
                        <div class="titulo-tarjeta">
                            <h4>Tsigo Asesorando</h4>
                        </div>
                        <div class="texto-tarjeta">
                            <h6>Asesoría por demanda</h6>
                            <p>Asesoría en la modalidad de demanda en el diseño, implementación, mantenimiento y mejora de los Sistemas de Gestión de una parte y de cualquiera de ellos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include '../includes/footer.php';
        ?>

        <!-- JS BOOSTSTRAP -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>