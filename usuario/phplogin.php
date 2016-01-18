<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd=new Database();
$em= Request::post('email');
$pas=Request::post('clave');
$p=sha1($pas);
$gestor = new ManageUsuario($bd);
$usuario=$gestor->get($em);

$rid=$gestor->getUsuarioTrue($em,$p);
$ra=$gestor->esAdmin($em, $p);
$rp=$gestor->esPersonal($em, $p);

if($rid==1){
    if(!$sesion->get("usu")){
    $sesion->set("usu",$em);
    }
    if($ra==0 && $rp==0){
        header('Location:pagusuario.php');
    }
    else if($ra==1){
    header('Location:pagadministrador.php');
    }
    else if($rp==1 && $ra==0){
     header('Location:pagpersonal.php');
    }
}
    else{
    $r=-1;
   header('Location:../index.php?r='.$r);
}


