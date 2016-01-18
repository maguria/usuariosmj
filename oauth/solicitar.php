

<?php

session_start();

require_once '../clases/Google/autoload.php';

$cliente = new Google_Client();

$cliente->setApplicationName('correo'); //Nombre de mi aplicación API

$cliente->setClientId('750166320318-drg7l14mcm8qtv254jhb84sbqik6jm29.apps.googleusercontent.com'); //idCliente descargado de JSon

$cliente->setClientSecret('KH9Qp0R4jfqco_qKNo0Fx64t'); //secreto del cliente que nos hemos descargado de JSon

$cliente->setRedirectUri('https://usuarioscorreo-maguria.c9users.io/oauth/guardar.php'); //ruta dd esta nuestro guardar.php

$cliente->setScopes('https://www.googleapis.com/auth/gmail.compose'); //Este credencial solo lee correos

$cliente->setAccessType('offline');

if (!$cliente->getAccessToken()) {

   $auth = $cliente->createAuthUrl(); //solicitud

   header("Location: $auth");

}