<?php
require 'clases/Request.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/main.css"/>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="750166320318-drg7l14mcm8qtv254jhb84sbqik6jm29.apps.googleusercontent.com">
        <title></title>
    </head>
    <body>
        <div class="index">
        <div class="fondo"><img src="images/fondo.png"/></div>
        
        <div class="formu">
        <h2>REGISTRO DE USUARIOS</h2>
        <form action="#" method="POST">
            <input type="submit" name="registro" value="Registro" class="grande"/>
        </form>
        <?php
        if(Request::post('registro')){
        ?>
        
        <form action="usuario/phpaltausuario.php" method="POST">
            <label>Introduzca su email: <sup>*</sup><br/></label>
            <input type="text" name="email"/><br/>
            <label>Introduzca su clave: <sup>*</sup><br/></label>
            <input type="password" name="clave"/><br/>
            <label>Repita su clave: <sup>*</sup><br/></label>
            <input type="password" name="clave2"/><br/><br/>
            <input type="submit" name="registrar" value="Enviar" class="enviar"/>
            
        </form>
        <?php
        }
        $opUsuario = Request::get("opUsuario");
        $rUsuario = Request::get("rUsuario");
        $c=  Request::get("c");
        $a=Request::get("a");
        $repe=Request::get('repe');
        if($opUsuario!=null && $rUsuario!=-1){
                    echo "<p>Se ha dado de alta satisfactoriamente.</p><p>Recibirá un correo en su cuenta para activarse</p>";
                }
        if($c==-1){
            echo "<p>Las claves no coinciden</p>";
        }
        if($c==-2){
            echo "<p>Email incorrecto</p>";
        }
        if($repe==1){
            echo "<p>Ya existe otro usuario con ese email</p>";
        }
       
        ?>
        </div>
        <div class="formu">
            <h2>INICIO DE SESIÓN</h2>
        <form action="#" method="POST">
            <input type="submit" name="identificacion" value="Login" class="grande"/>
        </form>
        <?php
        if(Request::post('identificacion')){
        ?>
        
        <form method="POST" action="usuario/phplogin.php">
            Email:<sup>*</sup><br/>
            <input required type="text" name="email" />
            <br/> Password:
            <sup>*</sup><br/>
            <input required type="password" name="clave" />
            <br/><br/>
            <input type="submit" name="identificar" value="Entrar" class="enviar"/>
            </form>
            <a class="recuperar" href="recuperaclave.php">¿Olvidaste tu contraseña?</a>
        <?php
        }
        $r=  Request::get("r");

       if($r==-1){
                    echo "<br/>Datos incorrectos. Vuelva a intentarlo o regístrese";
                }
                
       if($a==1){
           echo "<br/>Contraseña modificada satisfactoriamente. Identifíquese para acceder";
       }
        ?>
        <?php
            $set=Request::get("set");
            if($set==1){
                echo "<br/>Sus datos se han modificado satisfactoriamente. Identifíquese para acceder";
            }
        
        ?>
        </div>
        <div class="formu">
            <h2>AUTENTICACIÓN CON GOOGLE</h2>
            <div class="google">
           <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    <script>
                        function onSignIn(googleUser) {
                            var profile = googleUser.getBasicProfile();
                            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                            console.log('Name: ' + profile.getName());
                            console.log('Image URL: ' + profile.getImageUrl());
                            console.log('Email: ' + profile.getEmail());
                            var id_token = googleUser.getAuthResponse().id_token;
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'https://usuarioscorreo-maguria.c9users.io/usuario/gettoken.php);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onload = function() {
                            var respuesta=JSON.parse(xhr.responseText);
                            if(respuesta.email_verified=='true'){   
                                if(respuesta.tipo==1){
                                    window.location.href="usuario/pagusuario.php";
                                }
                                else if(respuesta.tipo==2){
                                    window.location.href="usuario/pagpersonal.php";
                                }   
                                else if(respuesta.tipo==3){
                                    window.location.href="usuario/pagadministrador.php";
                                }
                            }
                            xhr.send(id_token);
                            }
                    }

                    
                </script>
              
        </div>
        <br/><br/>
         <a href="#" class="redes">M P N O</a></span>
        </div>
        
        </div>
    </body>
</html>
