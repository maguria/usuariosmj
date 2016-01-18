<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$bd= new Database();
$gestor= new ManageUsuario($bd);
$im=Request::post('imagen');
$em=$sesion->get("usu");
$usuario=$gestor->get($em);
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
        <div class="englobaadmin">
        <div class="adusu">
            <h2>SESI&Oacute;N INICIADA</h2>
        <?php
        if($sesion->get("usu")){
                    ?> <b><?php echo $sesion->get("usu"); ?></b>
        <br/><br/>
        <form method="POST" action="phplogout.php">
                <input type="submit" name="cerrar" value="Cerrar sesi&oacute;n" class="sesion" />
        </form>
        </div>
        <div class="adusu centratabla">
            
        <div class="capafoto">
            <?php
            $foto=$usuario->getTrozo($em);
            ?>
            <br/>
            <div class="foto" id="fotousuario"><img src="../images/<?php echo $foto; ?>.jpg" id='imageu'/></div><br/><br/>
            <form method="post" action="#" enctype="multipart/form-data"/>
            <input type="file" name="imagen" value="Editar imagen"/><br/><br/>
            <input type="submit" name="enviar" value="Subir" class="enviar" id="enviar"/>
            </form>
            <?php
            $trozo=$usuario->getTrozo($em);
            $fileUpload = new FileUpload($_FILES["imagen"]);
            $fileUpload->setNombre($trozo);
            $fileUpload->setDestino("../images/");
            $fileUpload->upload();
            
            ?>
        </div>
        <div class="capafoto">
            <h2 class="tb"> MI PERFIL</h2>
        <table>
        <form method="POST" action="../oauth/modificar.php">
        <tr><td>Email:</td><td> <input type="text" name="email" value=" <?php echo $em; ?> "/></td>
        <tr><td>Alias:</td><td><?php echo $em; ?></td> </tr>
        <tr><td>Clave: </td><td><input type="password" name="clave" value=" <?php echo $usuario->getClave(); ?> "/></td></tr>
        <tr><td>Fecha de alta:</td> <td><?php echo $usuario->getfechaalta(); ?></td></tr>
        <tr><td colspan="2" class="pagina"> <input type="submit" name="modemail" value="Modificar" class="enviar"/></td></tr>
    
        </form>
        </table>
        </div>
</div>
</div>
</div>
<?php

}
else{
    header('Location:../index.php');
}
?>

 </body>
</html>
