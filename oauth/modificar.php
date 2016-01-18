<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd=new Database();
$gestor=new ManageUsuario($bd);
$em=Request::post('email');
$cla=Request::post('clave');
$email=$sesion->get("usu");
$usuario=$gestor->get($email);

if($em!=$usuario->getEmail()){
    $usuario->setEmail($em);
    $usuario->setAlias($em);
}
if(sha1($cla)!=$usuario->getClave()){
  $usuario->setClave(sha1($cla));
}

if($gestor->setEm($usuario, $email)){
  $set=1;
}
$sesion->destroy();
$bd->close();

require_once '../clases/Google/autoload.php';
require_once '../clases/class.phpmailer.php';
$secreto=sha1($em.Contants::SEMILLA);
$mensaje="Estos son sus nuevos datos:\n\nEmail-> ".$usuario->getEmail()."\nClave-> ".$cla."\n\nPulse el siguiente enlace para acceder\n"."https://usuarioscorreo-maguria.c9users.io/index.php?email=$em&secreto=$secreto";
$envio=new Email($em,'Datos nuevos',$mensaje);
$envio->send();

header('Location:../index.php?set='.$set);

?>