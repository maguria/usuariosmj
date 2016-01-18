<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$id_token = Request::req("id_token");
$url = 'https://www.googleapis.com/oauth2/v3/tokeninfo?id_token='.$id_token;
$conexion = curl_init();
curl_setopt($conexion, CURLOPT_URL, $url);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);
$r = curl_exec($conexion);
curl_close($conexion);
if($r['email_verified']==true){
    $bd=new Database();
    $gestor=new ManageUsuario($bd);
    $usuario=$gestor->get($r['email']);
    //Comprobamos que el usuario existe. Si no lo registramos
    if($usuario->getEMail()!=null){
        $sesion->set("usu",$usuario);
        if($usuario->getActivo()==1){
            $r["tipo"]=1;
    }
    else if($usuario->getPersonal()==1){
        $r["tipo"]=2;
    }
    else if($usuario->getAdministrador()==1){
        $r["tipo"]=3;
    }
    }
    else{
        //Aqui lo registraria
        $r['resultado']="No registrado";
    }
}

echo json_encode($r);
                    