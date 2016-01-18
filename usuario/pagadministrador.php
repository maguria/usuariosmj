<?php
require '../clases/AutoCarga.php';
$sesion= new Session();
$bd= new Database();
$gestor= new ManageUsuario($bd);
$em=$sesion->get('usu');
$usuario=$gestor->get($em);
?>
<!DOCTYPE html>
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
        <div class="ad">
            <h2>SESIÓN INICIADA</h2>
        <?php
        if($sesion->get('usu')){
                    echo $sesion->get('usu');
        ?>
        <form method="POST" action="phplogout.php">
                <input type="submit" name="cerrar" value="Cerrar sesión" class="sesion" />
        </form>
        </div>
        <div class="capafoto">
            <?php
            $foto=$usuario->getTrozo($em);
            ?>
            <br/>
            <div class="foto" id="fotoadmin"><img src="../images/<?php echo $foto; ?>.jpg" id='imagea'/></div><br/><br/>
            <form method="post" action="#" enctype="multipart/form-data"/><br/><br/>
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
        
            <div class="ad centratabla">
        <h2> MI PERFIL</h2>
        <table>
        <form method="POST" action="../oauth/modificar.php">
        <tr><td>Email:</td><td> <input type="text" name="email" value=" <?php echo $usuario->getEmail(); ?> "/></td>
        <tr><td>Alias:</td><td><?php echo $em; ?></td> </tr>
        <tr><td>Clave: </td><td><input type="password" name="clave" value=" <?php echo $usuario->getClave(); ?> "/></td></tr>
        <tr><td>Fecha de alta:</td> <td><?php echo $usuario->getfechaalta(); ?></td></tr>
        <tr><td colspan="2" class="pagina"> <input type="submit" name="modemail" value="Modificar" class="enviar"/></td></tr>
    
        </form>
        </table>
        </div>
        <div class="ad">
        <h2>VISTAS</h2>
        <form method="post" action="usuarios.php">
            <input type="submit" name="verusu" value="Usuarios" class="enviar"/>
        </form><br/> 
       
        <form method="post" action="personal.php">
            <input type="submit" name="verpers" value="Personal" class="enviar"/>
        </form><br/>
      
          <form method="post" action="administradores.php">
            <input type="submit" name="veradm" value="Administradores" class="enviar"/>
        </form>
        </div>
        <div class="ad">
            <h2>ALTA NUEVA</h2>
        <form method="post" action="alta.php">
            <input type="submit" name="alta" value="Alta" class="grande"/>
        </form>
        <?php
        $opUsuario = Request::get("opUsuario");
        $rUsuario = Request::get("rUsuario");
        $c=  Request::get("c");
        if($opUsuario!=null && $rUsuario!=-1){
                    echo "<p>Usuario ha dado de alta satisfactoriamente.</p>";
                }
        if($c==-1){
            echo "<p>Las claves no coinciden</p>";
        }
        if($c==-2){
            echo "<p>Email incorrecto</p>";
        }
        ?>
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