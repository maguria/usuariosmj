<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd=new Database();
$gestor=new ManageUsuario($bd);
$email=Request::get('email');
$usuario=$gestor->get($email);
if($usuario->getPersonal()==0){
    $usuario->setPersonal(1);
    $gestor->set($usuario);
    header('Location:personal.php');
}
else {
   $usuario->setPersonal(0);
   $gestor->set($usuario);
   header('Location:usuarios.php');
} 


?>