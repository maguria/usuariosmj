{"filter":false,"title":"phpaltaper.php","tooltip":"/usuario/phpaltaper.php","undoManager":{"mark":54,"position":54,"stack":[[{"start":{"row":0,"column":0},"end":{"row":41,"column":2},"action":"insert","lines":["<?php","require '../clases/AutoCarga.php';","$sesion= new Session();","","$bd = new Database();","$gestor = new ManageUsuario($bd);","","$em=Request::post(\"email\");","$c1=Request::post(\"clave\");","$c2=Request::post(\"clave2\");","","if(Filter::isEmail($em)){","    if($c1==$c2){","        ","        $fechaalta=date('Y-m-d');","        $alias=$em;","        $usuario=new Usuario($em,sha1($c1),$alias,$fechaalta);","        if(Request::post('activo')){","            $usuario->setActivo(1);","        }","        ","        if(Request::post('personal')){","            $usuario->setPersonal(1);","        }","        if(Request::post('admin')){","            $usuario->setAdministrador(1);","        }","        $rUsuario = $gestor->insert($usuario);","        $bd->close();","        ","        header('Location:pagadministrador.php?opUsuario=insert&rUsuario='.$rUsuario);","    }","    else{","        $c=-1;","        header('Location:index.php?c='.$c);","    } ","}","else{","   $c=-2;","   header('Location:index.php?c='.$c);","}","?>"],"id":1}],[{"start":{"row":21,"column":8},"end":{"row":26,"column":9},"action":"remove","lines":["if(Request::post('personal')){","            $usuario->setPersonal(1);","        }","        if(Request::post('admin')){","            $usuario->setAdministrador(1);","        }"],"id":2}],[{"start":{"row":25,"column":40},"end":{"row":25,"column":41},"action":"remove","lines":["r"],"id":3}],[{"start":{"row":25,"column":39},"end":{"row":25,"column":40},"action":"remove","lines":["o"],"id":4}],[{"start":{"row":25,"column":38},"end":{"row":25,"column":39},"action":"remove","lines":["d"],"id":5}],[{"start":{"row":25,"column":37},"end":{"row":25,"column":38},"action":"remove","lines":["a"],"id":6}],[{"start":{"row":25,"column":36},"end":{"row":25,"column":37},"action":"remove","lines":["r"],"id":7}],[{"start":{"row":25,"column":35},"end":{"row":25,"column":36},"action":"remove","lines":["t"],"id":8}],[{"start":{"row":25,"column":34},"end":{"row":25,"column":35},"action":"remove","lines":["s"],"id":9}],[{"start":{"row":25,"column":33},"end":{"row":25,"column":34},"action":"remove","lines":["i"],"id":10}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"remove","lines":["n"],"id":11}],[{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"remove","lines":["i"],"id":12}],[{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"remove","lines":["m"],"id":13}],[{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"remove","lines":["d"],"id":14}],[{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"remove","lines":["a"],"id":15}],[{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"insert","lines":["p"],"id":16}],[{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"insert","lines":["e"],"id":17}],[{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"insert","lines":["r"],"id":18}],[{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"insert","lines":["s"],"id":19}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["o"],"id":20}],[{"start":{"row":25,"column":33},"end":{"row":25,"column":34},"action":"insert","lines":["n"],"id":21}],[{"start":{"row":25,"column":34},"end":{"row":25,"column":35},"action":"insert","lines":["a"],"id":22}],[{"start":{"row":25,"column":35},"end":{"row":25,"column":36},"action":"insert","lines":["l"],"id":23}],[{"start":{"row":29,"column":29},"end":{"row":29,"column":30},"action":"remove","lines":["x"],"id":24}],[{"start":{"row":29,"column":28},"end":{"row":29,"column":29},"action":"remove","lines":["e"],"id":25}],[{"start":{"row":29,"column":27},"end":{"row":29,"column":28},"action":"remove","lines":["d"],"id":26}],[{"start":{"row":29,"column":26},"end":{"row":29,"column":27},"action":"remove","lines":["n"],"id":27}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"remove","lines":["i"],"id":28}],[{"start":{"row":29,"column":25},"end":{"row":29,"column":26},"action":"insert","lines":["p"],"id":29}],[{"start":{"row":29,"column":26},"end":{"row":29,"column":27},"action":"insert","lines":["a"],"id":30}],[{"start":{"row":29,"column":27},"end":{"row":29,"column":28},"action":"insert","lines":["g"],"id":31}],[{"start":{"row":29,"column":28},"end":{"row":29,"column":29},"action":"insert","lines":["p"],"id":32}],[{"start":{"row":29,"column":29},"end":{"row":29,"column":30},"action":"insert","lines":["e"],"id":33}],[{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"insert","lines":["r"],"id":34}],[{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"insert","lines":["s"],"id":35}],[{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["o"],"id":36}],[{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":["n"],"id":37}],[{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"insert","lines":["a"],"id":38}],[{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"insert","lines":["l"],"id":39}],[{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"remove","lines":["x"],"id":40}],[{"start":{"row":34,"column":23},"end":{"row":34,"column":24},"action":"remove","lines":["e"],"id":41}],[{"start":{"row":34,"column":22},"end":{"row":34,"column":23},"action":"remove","lines":["d"],"id":42}],[{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"remove","lines":["n"],"id":43}],[{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"remove","lines":["i"],"id":44}],[{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"insert","lines":["p"],"id":45}],[{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"insert","lines":["a"],"id":46}],[{"start":{"row":34,"column":22},"end":{"row":34,"column":23},"action":"insert","lines":["g"],"id":47}],[{"start":{"row":34,"column":23},"end":{"row":34,"column":24},"action":"insert","lines":["p"],"id":48}],[{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"insert","lines":["e"],"id":49}],[{"start":{"row":34,"column":25},"end":{"row":34,"column":26},"action":"insert","lines":["r"],"id":50}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["s"],"id":51}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"insert","lines":["o"],"id":52}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"insert","lines":["n"],"id":53}],[{"start":{"row":34,"column":29},"end":{"row":34,"column":30},"action":"insert","lines":["a"],"id":54}],[{"start":{"row":34,"column":30},"end":{"row":34,"column":31},"action":"insert","lines":["l"],"id":55}]]},"ace":{"folds":[],"scrolltop":3,"scrollleft":0,"selection":{"start":{"row":22,"column":29},"end":{"row":22,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1452616583672,"hash":"0e9c33af3b34370efb19dfffeb0e16fe83bb62bc"}