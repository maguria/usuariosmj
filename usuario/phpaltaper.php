<?php
require '../clases/AutoCarga.php';
$sesion= new Session();

$bd = new Database();
$gestor = new ManageUsuario($bd);

$em=Request::post("email");
$c1=Request::post("clave");
$c2=Request::post("clave2");

if(Filter::isEmail($em)){
    if($c1==$c2){
        
        $fechaalta=date('Y-m-d');
        $alias=$em;
        $usuario=new Usuario($em,sha1($c1),$alias,$fechaalta);
        if(Request::post('activo')){
            $usuario->setActivo(1);
        }
        
        
        $rUsuario = $gestor->insert($usuario);
        $bd->close();
        
        header('Location:pagpersonal.php?opUsuario=insert&rUsuario='.$rUsuario);
    }
    else{
        $c=-1;
        header('Location:pagpersonal.php?c='.$c);
    } 
}
else{
   $c=-2;
   header('Location:pagpersonal.php?c='.$c);
}
?>