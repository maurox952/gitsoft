<?php

include '../../conexion/conexion.php';
$id=$_GET['id_empleado'];
$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$cel=$_POST['celular'];
$fecha_naci=$_POST['fecha_naci'];
$correo=$_POST['correo'];
$cargo=$_POST['cargo'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$sexo=$_POST['sexo'];

$up = $conn -> query("UPDATE tblempleado SET nombres='$nombre', apellidos='$apellido', celular='$cel', fecha_nacimiento='$fecha_naci', correo='$correo', id_cargo='$cargo', direccion='$direccion', ciudad='$ciudad', departamento='$departamento', sexo='$sexo' WHERE id_empleado='$id'");

if($up==TRUE){
    echo "<script> alert('EPA') </script>";
    echo "<script> 	location.href='../empleados.php'; </script>";
}else{
    echo "<script> alert('NOOOOOO!') </script>";
    echo "Error:" . $up . "<br>". $conn->error;
}


?>