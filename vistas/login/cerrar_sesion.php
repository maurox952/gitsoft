<?php

session_start();

session_destroy();


//echo "<script> 	alert('Sesion Cerrada, vuelvas prontos :3') </script>";

echo "<script> 	location.href='login.php?msg=1'; </script>";



?>