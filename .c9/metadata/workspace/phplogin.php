{"changed":true,"filter":false,"title":"phplogin.php","tooltip":"/phplogin.php","value":"<?php\n\nrequire 'clases/AutoCarga.php';\n$sesion=new Session();\n$bd = new DataBase();\n$em=  Request::post(\"email\");\n$pas= Request::post(\"clave\");\n$p=sha1($pas);\n$gestor = new ManageUsuario($bd);\n\n$rid=$gestor->getUsuarioTrue($em,$p);\n$ra=$gestor->esAdmin($em, $p);\n$rp=$gestor->esPersonal($em, $p);\nif($rid==1 && $ra==0 && $rp==0){\n$sesion->set(\"usuario\",$em);\nheader('Location:pagusuario.php');\n}\nelse if($rid==1 && $ra==1 && $rp=1){\n    $sesion->set(\"usuario\",$em);\n    header('Location:pagadministrador.php');\n}\n    else if($rid==1 && $ra==0 && $rp=1){\n         $sesion->set(\"usuario\",$em);\n       header('Location:pagpersonal.php');\n    }\n    else{\n    $r=-1;\n   header('Location:index.php?r='.$r);\n}\n\n","undoManager":{"mark":-2,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["<?php","","require 'clases/AutoCarga.php';","$sesion=new Session();","$bd = new DataBase();","$em=  Request::post(\"email\");","$pas= Request::post(\"clave\");","$p=sha1($pas);","$gestor = new ManageUsuario($bd);","","$rid=$gestor->getUsuarioTrue($em,$p);","$ra=$gestor->esAdmin($em, $p);","$rp=$gestor->esPersonal($em, $p);","if($rid==1 && $ra==0 && $rp==0){","$sesion->set(\"usuario\",$em);","header('Location:pagusuario.php');","}","else if($rid==1 && $ra==1 && $rp=1){","    $sesion->set(\"usuario\",$em);","    header('Location:pagadministrador.php');","}","    else if($rid==1 && $ra==0 && $rp=1){","         $sesion->set(\"usuario\",$em);","       header('Location:pagpersonal.php');","    }","    else{","    $r=-1;","   header('Location:index.php?r='.$r);","}","",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":23},"end":{"row":30,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1452343533160}