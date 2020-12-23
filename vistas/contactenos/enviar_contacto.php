<?php

$nombre = $_POST['nombres'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];
$body = "Nombre: " . $nombre . "<br>Correo: " .$correo . "<br>Telefono: " . $celular . "<br>Comentario: " . $comentario ;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                           // SMTP::DEBUG_SERVER Enable verbose debug output
    $mail->isSMTP();                                                // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                           // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                       // Enable SMTP authentication
    $mail->Username   = 'ecocarwashprueba@gmail.com';               // SMTP username
    $mail->Password   = 'prueba123';                                // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;             // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                        // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('ecocarwashprueba@gmail.com', $nombre);
    $mail->addAddress('ecocarwashprueba@gmail.com');                // Add a recipient

    /*     $mail->addAddress('ellen@example.com');                  // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

    /*     // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');                   // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');              // Optional name
*/

    // Content
    $mail->isHTML(true);                                            // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;
    $mail->charset = 'UTF-8';
    
    $mail->send();
    //echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='contacto.php?msg=1'\",1000)</script>";
} catch (Exception $e) {
    //echo "<script>alert('No se pudo enviar el correo')</script>";
    echo "<script> setTimeout(\"location.href='contacto.php?msg=2'\",1000)</script>";
}
?>