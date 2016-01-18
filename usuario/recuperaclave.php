<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
  if($sesion->get("usu")){
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/main.css"/>
        <title></title>
    </head>
    <body>
        <div class="index">
    
        <div class="fondo"><img src="../images/fondo.png"/></div>
        <h2>Recuperación de contraseña</h2>
       <form action="../oauth/recuperaclave2.php" method="post">
            <span>Introduzca su correo electrónico: </span><input type="email" name="email"/>
            <input type="submit" value="Recuperar" class="enviar"/>
        </form>
        <?php
        $e=Request::get("e");
        $em=Request::get("em");
        if($e==1){
            echo "<h3>Se ha enviado un correo electrónico a ".$em."</h3>";
        }
        ?>
       </div>
    </body>
</html>
<?php
}
else{
    header('Location:../index.php');
}
?>