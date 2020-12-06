<?php
include '../../conexion/conexion.php';


$pregunta=$_POST['pregunta'];
$respuesta=$_POST['respuesta'];

$sql="INSERT INTO tblpreguntas (Pregunta, Respuesta) VALUES ('$pregunta', '$respuesta')";

if ($conn->query($sql) === FALSE) {
    echo "<script> 	location.href='../sitio.php'; </script>";
} else {
    echo "<script> alert('Registrado con exito')</script>";
    echo "<script> 	location.href='../sitio.php'; </script>";
}


?>