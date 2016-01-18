<?php
require '../clases/AutoCarga.php';
$sesion=new Session();
$usu=new Usuario();
$em=$sesion->get("usu");
$trozo=$usu->getTrozo($em);
$fileUpload = new FileUpload($_FILES["imagen"]);
$fileUpload->setNombre($trozo);
$fileUpload->setDestino("../images/");
$fileUpload->upload();
// $resultado=FileUpload::uploadMulti($_FILES["imagen"],"../images/",$trozo);
// var_dump($_FILES["imagen"]);
// var_dump($resultado);
// var_dump($trozo);
    
 /*
$cont=0;
$band=false;
foreach($resultado as $value){
    if($value[0]==0){
       
       $cont++;
       $band=true;
    }
    else{
        echo "Archivo no subido<br/>(Error ".$value[0]."->". $value[1].")<br/>";  
    }
}

if($band==true){
    echo "<h3>Se ha/n subido ".$cont." archivo/s correctamente</h3>";
}
*/
    