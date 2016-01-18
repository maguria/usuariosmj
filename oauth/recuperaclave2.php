 <?php
 require '../clases/AutoCarga.php';
 $sesion=new Session();
 $em=Request::post("email");
 require_once '../clases/Google/autoload.php';
 require_once '../clases/class.phpmailer.php';
 $secreto=sha1($em.Contants::SEMILLA);
      $mensaje="Pulse el enlace para generar una nueva clave: "."https://usuarioscorreo-maguria.c9users.io/usuario/cambioclave.php?email=$em&secreto=$secreto";
      $envio=new Email($em,'Nueva clave',$mensaje);
      if($envio->send()){
       $e=1; 
       header('Location:../usuario/recuperaclave.php?e='.$e.'&em='.$em);
      }
      
?>