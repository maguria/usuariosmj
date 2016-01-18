<?php 
require '../clases/AutoCarga.php';
$sesion= new Session();
  if($sesion->get("usu")){
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <form action="#" method="POST">
             
               Introduzca su nueva contraseña</span><input type="password" name="nuevaClave"/>
               Repita su nueva contraseña</span><input type="password" name="nuevaClave2"/>
               
              <input type="submit" value="Cambiar"/>
           </form> 
 <?php 
        
$bd= new Database();
$gestor= new ManageUsuario($bd);
$email=Request::get('email');
$usuario=$gestor->get($email);



$c1=Request::post("nuevaClave");
$c2=Request::post("nuevaClave2");


if($c1==$c2){
        $fechaAlta=$usuario->getFechaAlta();
        $act=$usuario->getActivo();
        $adm=$usuario->getAdministrador();
        $pers=$usuario->getPersonal();
        $alias=$usuario->getAlias();
        $cambiar= new Usuario($email,sha1($c1),$alias,$fechaAlta,$act,$adm,$pers); 
        if($gestor->set($cambiar)){
            $a=1;

        header('Location:../index.php?a='.$a);
      }
}
else{
        echo "Las claves no coinciden. Vuelva a intentarlo";
    } 
  }
  else
  {
      header('Location:../index.php');
  }
     ?>
    </body>
</html>