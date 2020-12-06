<?php

include '../conexion./conexion.php';

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

        <title>Administrador Gitsot</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        

        <!-- Custom styles for this template -->
        <link href="simple-sidebar.css" rel="stylesheet">

        <!-- Sweet alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="https://kit.fontawesome.com/f599362e7b.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Gitsot
                </div>
                <div class="list-group list-group-flush">
                    <a href="informes.php" class="list-group-item list-group-item-action bg-light">Informes</a>
                    <a href="clientes.php" class="list-group-item list-group-item-action bg-light">Clientes</a>
                    <a href="empleados.php" class="list-group-item list-group-item-action bg-light">Empleados</a>
                    <a href="productos.php" class="list-group-item list-group-item-action bg-light">Productos</a>
                    <a href="preguntas.php" class="list-group-item list-group-item-action bg-light">Preguntas</a>
                    <a href="sitio" class="list-group-item list-group-item-action bg-light">Sitio</a>
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
                    <h1 class="mt-4">Lista de los clientes registrados</h1>
                    
                    <div class="mt-4">
            <table class="table table-hover">
                <thead class="thead">
                    <th>Identificación</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Sexo</th>
                    <th>correo</th>
                    <th></th>
                    <th></th>
                </thead>
                <?php 
                $sel = $conn ->query("SELECT `tblcliente`.`id_cliente`, `tblcliente`.`nombres`, `tblcliente`.`apellidos`, `tblcliente`.`celular`, `tblcliente`.`direccion`, `tblcliente`.`ciudad`, `tblcliente`.`departamento`, `tblcliente`.`sexo`, `tblcliente`.`correo`
                FROM `tblcliente`;");
                    $cont=0;
                while ($fila = $sel -> fetch_assoc()) {
                    $cont++;
                ?>
                <tr>
                    <td><?php echo $fila['id_cliente'] ?></td>
                    <td><?php echo $fila['nombres'] ?></td>
                    <td><?php echo $fila['apellidos'] ?></td>
                    <td><?php echo $fila['celular'] ?></td>
                    <td><?php echo $fila['direccion'] ?></td>
                    <td><?php echo $fila['ciudad'] ?></td>
                    <td><?php echo $fila['departamento'] ?></td>
                    <td><?php echo $fila['sexo'] ?></td>
                    <td><?php echo $fila['correo'] ?></td>
                    <td><button type="button" class="btn btn-admin" data-toggle="modal" data-target="#modal<?php echo $cont; ?>" id="ingresar">Actualizar</button></td>

                    <td><a href="#" onclick="preguntar(<?php echo $fila['Id_Cliente']?>)">ELIMINAR</a></td>


                </tr>

                    <!-- /Modal acutualzar usuario -->

                    <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $cont; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar Usuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                            <form action="restar_insumo.php?Id_Insumo=<?php echo $fila['Id_Insumo']?>" method="post">
                                                <label>Identificación:</label>
                                                <input type="text" class="form-control" name="id" value="<?php echo $fila['Id_Cliente'] ?>">
                                                <label>Nombre cliente:</label>
                                                <input type="text" class="form-control" name="nombre" value="<?php echo $fila['Nombre'] ?>">
                                                <label>Apellido cliente:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Apellidos']?>">
                                                <label>Fecha de nacimiento:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Fecha_Nacimiento']?>">
                                                <label>Celular:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Cel']?>">
                                                <label>Municipio:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Municipio']?>">
                                                <label>Departamento:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Departamento']?>">
                                                <label>Dirección:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Direccion']?>">
                                                <label>Correo:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['Correo']?>">
                                                
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-admin">Guardar</button>
                                                    <button type="button" class="btn btn-admin" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>


                <!-- /#Final Modal Actualizar usuario -->

                    
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

        <!-- pregunta antes de eliminar sweat alert -->
        <script type="text/javascript">
            function preguntar(id){
            Swal
                .fire({
                    title: "¿Eliminar Cliente?",
                    text: "¿Estas seguro de eliminar el Cliente?",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="controlador/eliminar_cliente.php?Id_Cliente="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

            }
        </script>

    </body>

</html>