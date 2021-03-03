<?php
/**
* Mandar un correo vía SMTP con autentificación
*/
//Importar la clase PHPMailer deltro del namespace global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP necesita horas precisas, y se DEBE configurar la zona horaria de PHP
// Esto debe hacerse en su php.ini, pero así es como se hace si no tiene acceso a eso
date_default_timezone_set('Etc/UTC');

//Crear nueva instancia de PHPMailer 
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$mail = new PHPMailer();
//Decirmos a PHPMailer que use SMTP
$mail->isSMTP();
//Se habilita el debbug de SMTP 
// SMTP::DEBUG_OFF = desactivado (para uso en producción)
// SMTP::DEBUG_CLIENT = mensajes del cliente
// SMTP::DEBUG_SERVER = mensajes del cliente y servidor
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Indicamos el  hostname del servidor de email
$mail->Host = 'smtp.gmail.com';
//Indicamos el puerto SMTP  - puede ser 25, 465 o  587
$mail->Port = 25;
//Indicamos si usamos autentificación SMTP 
$mail->SMTPAuth = true;
//Nombre de usaurio para la autentificación SMTP
$mail->Username = 'daw.modulos@gmail.com';
//Password para la autentificación SMTP 
$mail->Password = 'daw.##21';
//La dirección y nombre del emisor
$mail->setFrom('daw.modulos@gmail.com', 'Daw - modulo');
//La dirección y nombre del receptor
$mail->addAddress('luis.martinez.redondo@gmail.com', 'Luis Martinez');
//Asunto
$mail->Subject = 'Información del registro';
$mail->Body = "Esta es una prueba de correo"; // Mensaje a enviar

//Adjuntar una imagen
//$mail->addAttachment('images/una_imagen.png');

//ENVIAR EL EMAIL, compronbando si hay errores.
if (!$mail->send()) {
    echo 'Error en el envío: ' . $mail->ErrorInfo;
} else {
    echo 'El email ha sido enviado correctamente.';
}