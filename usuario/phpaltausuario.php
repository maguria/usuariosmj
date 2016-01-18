<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd=new Database();
$gestor=new ManageUsuario($bd);
$em=Request::post("email");
$c1=Request::post("clave");
$c2=Request::post("clave2");
$usu=$gestor->get($em);
if(Request::post("email")){
if(Filter::isEmail($em)){
   
        if($c1==$c2){
        
        if($usu->getEmail()!=null){
            $repe=1;
            header('Location:../index.php?repe='.$repe);
        }
        else{
        $bd = new Database();
        $gestor = new ManageUsuario($bd);
        $fechaalta=date('Y-m-d');
        $alias=$em;
        $usuario=new Usuario($em,sha1($c1),$alias,$fechaalta);
        $rUsuario = $gestor->insert($usuario);
        $bd->close();
        
        require_once '../clases/Google/autoload.php';
        require_once '../clases/class.phpmailer.php';
        
      $secreto=sha1($em.Contants::SEMILLA);
      $mensaje="Confirme su registro pulsando el siguiente enlace:"."https://usuarioscorreo-maguria.c9users.io/oauth/activar.php?email=$em&secreto=$secreto";
      $envio=new Email($em,'Active su cuenta',$mensaje);
      $envio->send();
    header('Location:../index.php?opUsuario=insert&rUsuario='.$rUsuario);
    }
        }
    
    else{
        $c=-1;
        header('Location:../index.php?c='.$c);
    } 
}


else{
   $c=-2;
   header('Location:../index.php?c='.$c);
}
}else{
    header('Location:../index.php');
}

?>