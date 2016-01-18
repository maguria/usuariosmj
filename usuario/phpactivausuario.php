<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd=new Database();
$gestor=new ManageUsuario($bd);
$email=Request::get('email');
$usuario=$gestor->get($email);
$usuario->setActivo(1);

$gestor->set($usuario);
if($usuario->getPersonal()==0){
header('Location:usuarios.php');
}
else {
   header('Location:personal.php');
}
?>