<?php

include '../../conexion/conexion.php';

$id=$_GET['id'];
$nombre=$_POST['nombres'];
$apellido=$_POST['apellidos'];
$cel=$_POST['celular'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$sexo=$_POST['sexo'];
$correo=$_POST['correo'];


$up = $conn -> query("UPDATE tblcliente SET nombres='$nombre', apellidos='$apellido', celular='$cel', direccion='$direccion', ciudad='$ciudad', departamento='$departamento', sexo='$sexo',  correo='$correo'  WHERE id='$id'");

if($up==TRUE){
    echo "<script> alert('EPA') </script>";
    //echo "<script> 	location.href='../clientes.php'; </script>";
}else{
    echo "<script> alert('NOOOOOO!') </script>";
    echo "Error:" . $up . "<br>". $conn->error;
}


?>