<?php
    include('../../conexion/conexion.php');

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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>

    <!--importacion boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../../img/icono-pag.png">

    <!-- Sweet alerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="../../css/estilos.css">
</head>

<body>

    <section class="bg-quienes">
        <div class="caja-quienes">
            <h2 class="">Quiénes somos</h2>

            <hr />

            <h3 class="mt-1">Su aliado estratégico</h3>
            <h6>En Sistemas Integrados de Gestión</h6>

            <p>Como Consultores y Asesores integrales tenemos el conocimiento y la experiencia al diseñar, implementar,
                mantener y mejorar los Sistemas de Gestión de obligatorio cumplimiento bajo la normatividad vigente en
                Salud y Seguridad en el Trabajo
                (SG-SST), Gestión Ambiental (SGA), Buenas Prácticas de Manufactura (BPM) y Fabricación (BPF), al igual
                de obtener y mantener certificaciones NTC ISO adheridas a estas normas y conforme al contexto de cada
                organización, apoyados de la metodología
                en Gerencia de Proyectos PMI y las TIC´s permitiendo orientar los esfuerzos en alcanzar conceptos
                favorables de clientes o entes de control con el objetivo de minimizar costos y prevenir posibles
                sanciones a micro, pequeñas, medianas y
                grandes empresas en general con prioridad en sectores de la cadena de alimentos. Con un poco más 2 años
                en el mercado y aunque las normas irrigan diversos sectores de la economía nos hemos especializado en el
                sector manufactura e industria,
                específicamente del sector de la cadena de alimentos debido a que es en este campo donde hemos
                especializado nuestra capacidad de intervención, innovación y respuesta.</p>
        </div>
    </section>


    <!-- <section class="texto-quienes">
        <div class="text-center ">
            <h3>Su aliado estratégico</h3>
            <h6>En Sistemas Integrados de Gestión</h6>
        </div>
        <div class="p-5">
            <p>Como Consultores y Asesores integrales tenemos el conocimiento y la experiencia al diseñar, implementar, mantener y mejorar los Sistemas de Gestión de obligatorio cumplimiento bajo la normatividad vigente en Salud y Seguridad en el Trabajo
                (SG-SST), Gestión Ambiental (SGA), Buenas Prácticas de Manufactura (BPM) y Fabricación (BPF), al igual de obtener y mantener certificaciones NTC ISO adheridas a estas normas y conforme al contexto de cada organización, apoyados de la metodología
                en Gerencia de Proyectos PMI y las TIC´s permitiendo orientar los esfuerzos en alcanzar conceptos favorables de clientes o entes de control con el objetivo de minimizar costos y prevenir posibles sanciones a micro, pequeñas, medianas y
                grandes empresas en general con prioridad en sectores de la cadena de alimentos. Con un poco más 2 años en el mercado y aunque las normas irrigan diversos sectores de la economía nos hemos especializado en el sector manufactura e industria,
                específicamente del sector de la cadena de alimentos debido a que es en este campo donde hemos especializado nuestra capacidad de intervención, innovación y respuesta.</p>
        </div>
        <div class="text-center">
            <button>Testimonios</button>
        </div>
    </section> -->

    <section>
    <div class="text-center mt-5">
                <h2>Reconocimientos</h2>
            </div>
        <div class="container row col">


            <div class="reconocimientos row p-5 col-4">
                <div class="text-center">
                    <img src="../../img/logos-02.png">
                </div>
                
                <p>De 185 empresas postuladas fuimos elegidos entre las 124 empresas viables para facilitar el acceso a capital semilla al poner a disposición de los beneficiarios los recursos necesarios en la puesta en marcha de las nuevas unidades productivas.</p>
            </div>

            <div class="reconocimientos row p-5 col-4">
                <div class="text-center">
                    <img src="../../img/logos-03.png">
                </div>
                
                <p>De 60 empresas postuladas fuimos elegidos entre las 10 empresas formalizadas en etapa temprana para recibir incentivos económicos y apoyo de profesionales en el fortalecimiento del plan de negocio y financiero.</p>
            </div>

            <div class="reconocimientos row p-5 col-4">
                <div class="text-center">
                    <img src="../../img/logos-05.png">
                </div>
                
                <p>De 80 empresas postuladas fuimos elegidos entre las 10 ideas de innovación tecnológica para el desarrollo del prototipo funcional de nuestra plataforma tecnológica en su primera fase.</p>
            </div>

            <div class="reconocimientos row p-5 col-4">
                <div class="text-center">
                    <img src="../../img/logos-04.png">
                </div>
                
                <p>De 50 empresas postuladas fuimos elegidos entre las 10 empresas jóvenes que poseen una propuesta única de valor para apoyarnos en el fortalecimiento de nuestra imagen corporativa, comunicaciones, financiero y comercial.</p>
            </div>

            <div class="reconocimientos row p-5 col-4">
                <div class="text-center">
                    <img src="../../img/logos-01.png">
                </div>
                
                <p>Una iniciativa del BID, Confecámaras y la Cámara de Comercio Aburrá Sur para fortalecer las iniciativas de los jóvenes empresarios.</p>
            </div>


        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>