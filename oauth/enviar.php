<?php

session_start();

$origen="maguria@gmail.com";
$alias="mj";
$destino="mj_0977@hotmail.com";
$asunto="Prueba de correo php";
$mensaje="Hola, guapa";

require_once '../clases/Google/autoload.php';
require_once '../clases/class.phpmailer.php';  //las últimas versiones también vienen con autoload
$cliente = new Google_Client();

$cliente->setApplicationName('correo'); //Nombre de mi aplicación API
$cliente->setClientId('750166320318-drg7l14mcm8qtv254jhb84sbqik6jm29.apps.googleusercontent.com'); //idCliente descargado de JSon
$cliente->setClientSecret('KH9Qp0R4jfqco_qKNo0Fx64t'); //secreto del cliente que nos hemos descargado de JSon
$cliente->setRedirectUri('https://practica1-maguria.c9users.io/oauth/guardar.php');

$cliente->setScopes('https://www.googleapis.com/auth/gmail.compose');
$cliente->setAccessToken(file_get_contents('token.conf'));
if ($cliente->getAccessToken()) {
    $service = new Google_Service_Gmail($cliente);
    try {
        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->From = $origen;
        $mail->FromName = $alias;
        $mail->AddAddress($destino);
        $mail->AddReplyTo($origen, $alias);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;
        $mail->preSend();
        $mime = $mail->getSentMIMEMessage();
        $mime = rtrim(strtr(base64_encode($mime), '+/', '-_'), '=');
        $mensaje = new Google_Service_Gmail_Message();
        $mensaje->setRaw($mime);
        $service->users_messages->send('me', $mensaje);
        echo "Correo enviado correctamente";
    } catch (Exception $e) {
        print($e->getMessage());
        echo "error de envio";
    }
}

else{
    echo "No conectado con gmail";
}