<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

// SMTPDebug = 0 -> desactivado (para uso en producción)
// SMTPDebug = 1 -> mensajes del cliente
// SMTPDebug = 2 -> mensajes del cliente y servidor
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//configuracion
$mail->SMTPAuth = true;
$mail->Username = 'daw.modulos@gmail.com';
$mail->Password = 'daw.##21';
$mail->setFrom('daw.modulos@gmail.com', 'MODULO DAW');
$mail->addAddress('luis.martinez.redondo@gmail.com', 'Nombre Usuario');
$mail->Subject = 'Mensaje de bienvenida';
$mail->msgHTML(file_get_contents('mensaje.html'), __DIR__);
$mail->Body = 'Este mensaje es un texto de prueba del cuerpo';
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Error en el envío: ' . $mail->ErrorInfo;
} else {
    echo 'El email ha sido enviado correctamente.';
}

?>