<?php
require '../clases/AutoCarga.php';
$sesion=new Session();

$a=Request::get('a');
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
        <?php
        if($a==1){
            echo "<h2>Se ha activado satisfactoriamente. Por favor, identifíquese para acceder.</h2>";
        ?>
        <form method="POST" action="phplogin.php">
            Email:<sup>*</sup><br/>
            <input required type="text" name="email" />
            <br/> Password:
            <sup>*</sup><br/>
            <input required type="password" name="clave" />
            <br/><br/>
            <input type="submit" name="identificar" value="Iniciar sesión" class="enviar"/>
            </form>
            <a class="recuperar" href="recuperaclave.php">¿Olvidaste tu contraseña?</a>
<?php
}
else{
    echo "<br/><br/>Debe activarse para acceder a la página solicitada.";
}

?>
</div>
 </body>
</html>
