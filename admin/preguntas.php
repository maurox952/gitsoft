<?php

include '../conexion/conexion.php';

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Simple Sidebar - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        

        <!-- Custom styles for this template -->
        <link href="simple-sidebar.css" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet">

        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Abejorral
                </div>
                <div class="list-group list-group-flush">
                    <a href="informes.php" class="list-group-item list-group-item-action bg-light">Informes</a>
                    <a href="clientes.php" class="list-group-item list-group-item-action bg-light">Clientes</a>
                    <a href="empresas.php" class="list-group-item list-group-item-action bg-light">Empresas</a>
                    <a href="productos.php" class="list-group-item list-group-item-action bg-light">Productos</a>
                    <a href="preguntas.php" class="list-group-item list-group-item-action bg-light">Preguntas</a>
                    <a href="sitio.php" class="list-group-item list-group-item-action bg-light">Sitio Turistico</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-admin toggled" id="menu-toggle"><i class="fas fa-bars"></i></button>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">inicio2</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdown"
                                    role="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../index.php">inicio</a>
                                    <a class="dropdown-item" href="#">otra direccion</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">otra direccion</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">
                    <h1 class="mt-4">Sección de preguntas frecuentes</h1>
                    <form action="controlador/insertar_pregunta.php" name="add_form" method="post">
                        <div class="form-group">
                            <label>Pregunta:</label>
                                <input type="text" id="pregunta" name="pregunta" class="form-control" placeholder="Ejemplo: ¿Cómo funciona la página?" required>
                        </div>
                        <div class="form-group">
                            <label> Descripción:</label>
                                <textarea id="respuesta" name="respuesta" class="form-control" cols="30" rows="10" placeholder="Respuesta de la pregunta" required></textarea>
                        </div>
                        <div class="form-group text-center mb-5">
                            <button type="submit" class="btn btn-admin">Registrar</button>
                        </div>
                    </form>
                    
                    <div class="mt-4">
                        <table class="table table-hover">
                            <thead class="thead">
                                <th>Cod</th>
                                <th>Pregunta</th>
                                <th>Respuesta</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <?php 
                            $sel = $conn ->query("SELECT * FROM tblpreguntas ");
                            while ($fila = $sel -> fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $fila['cod_pregunta'] ?></td>
                                <td><?php echo $fila['Pregunta'] ?></td>
                                <td><?php echo $fila['Respuesta'] ?></td>
                                
                                <td>
                                            <button
                                                type="button"
                                                class="btn btn-admin"
                                                data-toggle="modal"
                                                data-target="#modal<?php echo $cont; ?>"
                                                id="ingresar">Actualizar</button>
                                        </td>
                                        <td>
                                            <button
                                                type="button"
                                                class="btn btn-admin"
                                                data-toggle="modal"
                                                data-target="#modal<?php echo $cont; ?>"
                                                id="ingresar">Eliminar</button>
                                        </td>
                            </tr>
                            <?php } ?>
                        </table>
                        </div>
                    </div>


            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
    </script>

    </body>

</html>