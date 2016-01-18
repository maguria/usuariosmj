<?php
    require '../clases/AutoCarga.php';
    $sesion=new Session();
    $bd = new Database();
    $gestor=new ManageUsuario($bd);
    $page=  Request::get('page');
    if($page===null || $page===""){
        $page=1;
    }
    $registros=$gestor->count();
    
    $paginas=ceil($registros /  Contants::NRPP);
    
    $usuarios=$gestor->getListAdministrador($page);
    $usu=new Usuario();
    $a=Request::get('a');
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
        <div class="englobaadmin">
            <div class="tabla">
          <table>
                        <th colspan="5" class="th">
                            <h2 class="blanco">Administradores</h2>
                        </th>
                        <tr>
                        <th class="thdos">Email</th>
                        <th class="thdos">Clave</th>
                        <th class="thdos">Alias</th>
                        <th class="thdos">Fecha de alta</th>
                        <th class="thdos">Activo</th>
            
                        <?php
                            foreach ($usuarios as $indice => $usuario) {
                
                        ?>
                            <tr>
                                <td>
                                    <?php echo $usuario->getEmail()?>
                                </td>
                                <td>
                                    <?php echo $usuario->getClave(); ?>
                                </td>
                                <td>
                                    <?php echo $usuario->getAlias(); ?>
                                </td>
                                <td>
                                    <?php echo $usuario->getfechaAlta(); ?>
                                </td>
                                <td>
                                    <?php echo $usuario->getActivo(); ?>
                                </td>
                               
                               
                                
                            </tr>
                            <?php
                        }
                        ?>
                                <tr>
                                    <td colspan="5" class="pagina">
                                        <a href='?page=1'>
                                            <input type="button" name="primera" value="Primera página" class="page" />
                                        </a>
                                        <a href="?page=<?php echo max(1, $page-1); ?>">
                                            <input type="button" name="anterior" value="Anterior" class="page"  />
                                        </a>
                                        <a href="?page=<?php echo min($page+1,$paginas); ?>">
                                            <input type="button" name="siguiente" value="Siguiente" class="page"  />
                                        </a>
                                        <a href="?page=<?php echo $paginas; ?>">
                                            <input type="button" name="ultima" value="Última página" class="page" />
                                        </a>
                                        <a href="pagadministrador.php" class="volver2"><input type="button" name="volver" value="Volver" class="page pagedos" /></a>
                                    </td>
                                </tr>
    
                    </table>
                    </div>
            </div>
          </div> 
    </body>
</html>
<?php
}
else{
    header('Location:../index.php');
}
$bd->close();
?>