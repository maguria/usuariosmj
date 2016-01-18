<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd=new Database();
$gestor=new ManageUsuario($bd);
$email=Request::get('email');
$clave=Request::get('secreto');
$usuario=$gestor->get($email);
$usuario->setActivo(1);


if($gestor->set($usuario)){
    $a=1;
}

header('Location:../usuario/activado.php?a='.$a);
?>