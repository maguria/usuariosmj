<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd=new Database();
$gestor=new ManageUsuario($bd);
$email=Request::get('email');
$usuario=$gestor->get($email);
$usuario->setAdministrador(1);
$usuario->setPersonal(1);
$usuario->setActivo(1);
$gestor->set($usuario);
header('Location:administradores.php');
?>