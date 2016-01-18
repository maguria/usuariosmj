<?php
    require '../clases/AutoCarga.php';
    $sesion=new Session();
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
        <div class="engloba">
        <h2>Alta nueva</h2>
        
            <form action="phpalta.php" method="POST">
            <label>Introduzca su email: <sup>*</sup><br/></label>
            <input type="text" name="email"/><br/>
            <label>Introduzca su clave: <sup>*</sup><br/></label>
            <input type="password" name="clave"/><br/>
            <label>Repita su clave: <sup>*</sup><br/></label>
            <input type="password" name="clave2"/><br/>
            Activo <input type="checkbox" name="activo" class="check">
            Personal <input type="checkbox" name="personal" class="check">
            Administrador  <input type="checkbox" name="admin" class="check"><br/><br/>
              
            <input type="submit" name="registrar" value="Enviar" class="enviar"/>
 </form>
   </div>     
</div>
</body>
</html>
<?php
}
    else{
        header('Location:../index.php');
    }
?>
