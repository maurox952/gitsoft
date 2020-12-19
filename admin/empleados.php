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

        <title>Administrador Gitsot</title>

        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">

        <!-- estilos menu lateral admin -->
        <link href="simple-sidebar.css" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet">

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
        <!-- <a href="productos.php" class="list-group-item list-group-item-action bg-light">Productos</a>
        <a href="preguntas.php" class="list-group-item list-group-item-action bg-light">Preguntas</a>
        <a href="sitio.php" class="list-group-item list-group-item-action bg-light">Sitio Turistico</a> -->
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

    <main class="col-12">
        <div class="container">
            <div>
            <h1>Registrar Empleado</h1>
            </div>
            <div>
            <form action="controlador/ingresar_empleado.php" name="add_form" method="POST">
                <labe>Identificación</label>
                    <input type="text" class="form-control" name="identificacion">
                <labe>Nombres</label>
                    <input type="text" class="form-control" name="nombres">
                <labe>Apellidos</label>
                    <input type="text" class="form-control" name="apellidos">
                <labe>Celular</label>
                    <input type="text" class="form-control" name="celular">
                <labe>Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento">
                <labe>Cargo</label>
                        <select name="cargo" class="form-control"><option value="0" selected="selected" required>
                        <?php 
                            $sel = $conn ->query("SELECT * FROM tblcargo");
                            while ($row=$sel->fetch_array()) {
                        ?>
                        <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                        <?php	
                            }
                        ?> </select>
                <labe>Direccion</label>
                    <input type="text" class="form-control" name="direccion">
                <labe>Ciudad</label>
                    <input type="text" class="form-control" name="ciudad">
                <labe>Departamento</label>
                    <input type="text" class="form-control" name="departamento">
                <labe>sexo</label>
                    <select class="form-control" name="sexo">
                        <option value="Hombre">Hombre</option>
                        <option value="Hombre">Mujer</option>
                        <option value="Hombre">Otro</option>
                    </select>
                <fieldset class="fieldset">
                    <legend class="legend">Datos de Usuario</legend>
                    <label class="label-frm">Correo</label><br>
                    <input type="email" name="correo" class="form-control" placeholder="Ingrese el Correo">
                    <br><br>
                    <label class="label-frm">Contraseña</label><br>
                    <input type="password" name="contrasena" class="form-control" placeholder="Ingrese la Contraseña">
                    <br><br>
                    <label class="label-frm">Confirmar Contraseña</label><br>
                    <input type="password" name="com-contrasena"class="form-control" placeholder="Confirme la contraseña">
                </fieldset>

                
                <input type="submit" value="Enviar" class="btn btn-primary">
            </form>
            </div>
        </div>

    </main>

    <div class="container-fluid">
        <h1 class="mt-4">Empleados</h1>
        <div class="mt-4 tabla">
            <table class="table table-hover">
                <thead class="thead">
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Fecha Nacimiento</th>
                    <th>Córreo</th>
                    <th>Cargo</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Departamento</th>
                    <th>Sexo</th>
                    <th></th>
                    <th></th>
                </thead>
                <?php 
                $sel = $conn ->query("SELECT `tblempleado`.`id`, `tblempleado`.`nombres`, `tblempleado`.`apellidos`, `tblempleado`.`celular`, `tblempleado`.`fecha_nacimiento`, `tblempleado`.`correo`, `tblcargo`.`nombre`, `tblempleado`.`direccion`, `tblempleado`.`ciudad`, `tblempleado`.`departamento`, `tblempleado`.`sexo`
                FROM `tblempleado` 
                    LEFT JOIN `tblcargo` ON `tblempleado`.`id_cargo` = `tblcargo`.`id_cargo`;");
                    $cont=0;
                while ($fila = $sel -> fetch_assoc()) {
                    $cont++;
                ?>
                <tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><?php echo $fila['nombres'] ?></td>
                    <td><?php echo $fila['apellidos'] ?></td>
                    <td><?php echo $fila['celular'] ?></td>
                    <td><?php echo $fila['fecha_nacimiento'] ?></td>
                    <td><?php echo $fila['correo'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['direccion'] ?></td>
                    <td><?php echo $fila['ciudad'] ?></td>
                    <td><?php echo $fila['departamento'] ?></td>
                    <td><?php echo $fila['sexo'] ?></td>
                    
                    <td>
                                <button
                                    type="button"
                                    class="btn btn-admin"
                                    data-toggle="modal"
                                    data-target="#modal<?php echo $cont; ?>"
                                    id="ingresar">Actualizar</button>
                            </td>
                            <td>
                            <td><a href="#" onclick="preguntar(<?php echo $fila['id']?>)"><button class="btn btn-admin">Eliminar</button></a></td>
                </tr>

                <div class="modal" tabindex="-1" role="dialog" id="modal<?php echo $cont; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Editar Empleado</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                            <form action="controlador/actualizar_empleado.php?id=<?php echo $fila['id']?>" method="post">
                                                <label hidden>Identificación:</label>
                                                <input type="text" class="form-control" name="id" value="<?php echo $fila['id'] ?>" hidden>
                                                <label>Nombre cliente:</label>
                                                <input type="text" class="form-control" name="nombres" value="<?php echo $fila['nombres'] ?>">
                                                <label>Apellido cliente:</label>
                                                <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['apellidos']?>">
                                                <label>Celular:</label>
                                                <input type="text" class="form-control" name="celular" value="<?php echo $fila['celular']?>">
                                                <label>Fecha de nacimiento:</label>
                                                <input type="text" class="form-control" name="fecha_naci" value="<?php echo $fila['fecha_nacimiento']?>">
                                                <label>Correo:</label>
                                                <input type="text" class="form-control" name="correo" value="<?php echo $fila['correo']?>">
                                                <labe>Cargo:</label>
                                                <select name="cargo" class="form-control">
                                                    <?php 
                                                        $sql = $conn ->query("SELECT * FROM tblcargo");
                                                        while ($row=$sql->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
                                                    <?php
                                                        }
                                                    ?> 
                                                    </select>
                                                <label>Dirección:</label>
                                                <input type="text" class="form-control" name="direccion" value="<?php echo $fila['direccion']?>">
                                                <label>Ciudad:</label>
                                                <input type="text" class="form-control" name="ciudad" value="<?php echo $fila['ciudad']?>">
                                                <label>Departamento:</label>
                                                <input type="text" class="form-control" name="departamento" value="<?php echo $fila['departamento']?>">
                                                <label>Sexo:</label>
                                                <input type="text" class="form-control" name="sexo" value="<?php echo $fila['sexo']?>">
                                                
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-admin">Guardar</button>
                                                    <button type="button" class="btn btn-admin" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                <?php } ?>
            </table>
            </div>
        </div>


    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

                <!-- Bootstrap core JavaScript -->
                <script
                    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                    crossorigin="anonymous"></script>

                <!-- Menu Toggle Script -->
                <script>
                    $("#menu-toggle").click(function (e) {
                        e.preventDefault();
                        $("#wrapper").toggleClass("toggled");
                    });
                </script>


            <!-- pregunta antes de eliminar sweat alert -->
            <script type="text/javascript">
            function preguntar(id){
            Swal
                .fire({
                    title: "¿Eliminar empleado??",
                    text: "recuerde, que tambien le borrara las credenciales de acceso",
                    icon: 'error',            
                    showCancelButton: true,
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar",
                })
                .then(resultado => {
                    if (resultado.value) {
                        // Hicieron click en "Sí"
                        //console.log("*se elimina la venta*");
                        window.location.href="controlador/eliminar_empleado.php?id="+id
                    } else {
                        // Dijeron que no
                        console.log("*NO se elimina*");
                    }
                });

            }
        </script>

            </body>

        </html>