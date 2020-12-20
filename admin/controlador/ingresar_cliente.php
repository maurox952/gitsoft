<?php
include '../../conexion/conexion.php';

if ($conn->connect_error) {
    die("Conección exitosa: " . $conn->connect_error);
}

$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$departamento=$_POST['departamento'];
$sexo=$_POST['sexo'];

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

$sql=$conn->query("INSERT INTO tbllogin (correo, contraseña, id) VALUES ('$correo', '$contrasena', '$identificacion')");

if ($sql==TRUE){
    $sql2=$conn->query("INSERT INTO tblcliente (id, nombres, apellidos, celular, direccion, ciudad, departamento, id_rol, sexo, correo) VALUES ('$identificacion', '$nombres', '$apellidos', '$celular', '$direccion', '$ciudad', '$departamento', 3, '$sexo', '$correo')");
    if($sql2==TRUE){
        echo "<script> alert('Correcto')</script>";
        echo "<script> location.href='../empleados.php'; </script>";

    }else{
        $sql3=$conn->query("DELETE FROM tbllogin WHERE id='$identificacion'");
            echo "Error1: " . $sql2 . "<br>". $conn->error;
    }
}





?>