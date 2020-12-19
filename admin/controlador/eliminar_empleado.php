<?php
include '../../conexion/conexion.php';
        

$id_empleado=$_GET['id'];


$del = $conn -> query(" DELETE FROM tbllogin WHERE id='$id_empleado'");

if ($del==true){
    $del2=$conn -> query("DELETE FROM tblempleado WHERE id ='$id_empleado'");
    if($del2==true){
        echo "<script> alert ('Eliminado correctamente') </script>";
        echo "<script> 	location.href='../empleados.php'; </script>";
    }
}else{
    echo "<script> 	location.href='../empleados.php'; </script>";
}
?>