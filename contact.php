<?php
header("Content-type: text/html;charset=\"utf-8\"");
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$need = $_POST['need'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Participante: " . $nombre . ",\r\n";
$mensaje .= "Su correo es: " . $mail . " \r\n";
$mensaje .= "Nombre del torneo: " . $telefono . " \r\n";
$mensaje .= "Necesito: " . $need . " \r\n";
$mensaje .= "Mensaje: " . $empresa . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'sbanhelo@gmail.com';
$asunto = 'Contacto Rubiksperu';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Hemos recibido tu mensaje, nos comunicaremos contigo lo antes posible.');</script>";
echo "<script type='text/javascript'>window.location.href='https://rubiksperu.com/torneos';</script>";

?>