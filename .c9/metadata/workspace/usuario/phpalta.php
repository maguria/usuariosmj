{"filter":false,"title":"phpalta.php","tooltip":"/usuario/phpalta.php","undoManager":{"mark":72,"position":72,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":2},"action":"insert","lines":["<?php","$em=Request::post(\"email\");","$c1=Request::post(\"clave\");","$c2=Request::post(\"clave2\");","","if(Filter::isEmail($em)){","    if($c1==$c2){","        ","        $fechaalta=date('Y-m-d');","        $alias=$em;","        $usuario=new Usuario($em,sha1($c1),$alias,$fechaalta);","        if(Request::post('activo')){","            $usuario->setActivo(1);","        }","        ","        if(Request::post('personal')){","            $usuario->setPersonal(1);","        }","        if(Request::post('admin')){","            $usuario->setAdministrador(1);","        }","        $rUsuario = $gestor->insert($usuario);","        $bd->close();","        ","        header('Location:pagadministrador.php?opUsuario=insert&rUsuario='.$rUsuario);","    }","    else{","        $c=-1;","        header('Location:index.php?c='.$c);","    } ","}","else{","   $c=-2;","   header('Location:index.php?c='.$c);","}","?>"],"id":1}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":1,"column":0},"end":{"row":7,"column":2},"action":"insert","lines":["<?php","require '../clases/AutoCarga.php';","$sesion= new Session();","","$bd = new Database();","$gestor = new ManageUsuario($bd);","?>"],"id":3}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":5},"action":"remove","lines":["<?php"],"id":4}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":2},"action":"remove","lines":["?>"],"id":5}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"remove","lines":["",""],"id":6}],[{"start":{"row":34,"column":29},"end":{"row":34,"column":30},"action":"remove","lines":["x"],"id":7}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"remove","lines":["e"],"id":8}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":28},"action":"remove","lines":["d"],"id":9}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"remove","lines":["n"],"id":10}],[{"start":{"row":34,"column":25},"end":{"row":34,"column":26},"action":"remove","lines":["i"],"id":11}],[{"start":{"row":34,"column":25},"end":{"row":34,"column":26},"action":"insert","lines":["p"],"id":12}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["g"],"id":13}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"remove","lines":["g"],"id":14}],[{"start":{"row":34,"column":26},"end":{"row":34,"column":27},"action":"insert","lines":["a"],"id":15}],[{"start":{"row":34,"column":25},"end":{"row":34,"column":27},"action":"remove","lines":["pa"],"id":16},{"start":{"row":34,"column":25},"end":{"row":34,"column":41},"action":"insert","lines":["pagadministrador"]}],[{"start":{"row":39,"column":24},"end":{"row":39,"column":25},"action":"remove","lines":["x"],"id":17}],[{"start":{"row":39,"column":23},"end":{"row":39,"column":24},"action":"remove","lines":["e"],"id":18}],[{"start":{"row":39,"column":22},"end":{"row":39,"column":23},"action":"remove","lines":["d"],"id":19}],[{"start":{"row":39,"column":21},"end":{"row":39,"column":22},"action":"remove","lines":["n"],"id":20}],[{"start":{"row":39,"column":20},"end":{"row":39,"column":21},"action":"remove","lines":["i"],"id":21}],[{"start":{"row":39,"column":20},"end":{"row":39,"column":21},"action":"insert","lines":["p"],"id":22}],[{"start":{"row":39,"column":21},"end":{"row":39,"column":22},"action":"insert","lines":["a"],"id":23}],[{"start":{"row":39,"column":22},"end":{"row":39,"column":23},"action":"insert","lines":["g"],"id":24}],[{"start":{"row":39,"column":20},"end":{"row":39,"column":23},"action":"remove","lines":["pag"],"id":25},{"start":{"row":39,"column":20},"end":{"row":39,"column":36},"action":"insert","lines":["pagadministrador"]}],[{"start":{"row":25,"column":42},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["$"],"id":27}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["u"],"id":28}],[{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["s"],"id":29}],[{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["u"],"id":30}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["a"],"id":31}],[{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["r"],"id":32}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["i"],"id":33}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["o"],"id":34}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["-"],"id":35}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":[">"],"id":36}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":["s"],"id":37}],[{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["e"],"id":38}],[{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["t"],"id":39}],[{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["P"],"id":40}],[{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"insert","lines":["e"],"id":41}],[{"start":{"row":26,"column":27},"end":{"row":26,"column":28},"action":"insert","lines":["r"],"id":42}],[{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":["s"],"id":43}],[{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"insert","lines":["o"],"id":44}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["n"],"id":45}],[{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"insert","lines":["a"],"id":46}],[{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["l"],"id":47}],[{"start":{"row":26,"column":33},"end":{"row":26,"column":35},"action":"insert","lines":["()"],"id":48}],[{"start":{"row":26,"column":34},"end":{"row":26,"column":35},"action":"insert","lines":["1"],"id":49}],[{"start":{"row":26,"column":36},"end":{"row":26,"column":37},"action":"insert","lines":[";"],"id":50}],[{"start":{"row":26,"column":37},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":51},{"start":{"row":27,"column":0},"end":{"row":27,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"insert","lines":["$"],"id":52}],[{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"insert","lines":["u"],"id":53}],[{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":["s"],"id":54}],[{"start":{"row":27,"column":15},"end":{"row":27,"column":16},"action":"insert","lines":["u"],"id":55}],[{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"insert","lines":["a"],"id":56}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["r"],"id":57}],[{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["i"],"id":58}],[{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["o"],"id":59}],[{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["-"],"id":60}],[{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":[">"],"id":61}],[{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"insert","lines":["s"],"id":62}],[{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["e"],"id":63}],[{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"insert","lines":["t"],"id":64}],[{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["A"],"id":65}],[{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["c"],"id":66}],[{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["t"],"id":67}],[{"start":{"row":27,"column":28},"end":{"row":27,"column":29},"action":"insert","lines":["i"],"id":68}],[{"start":{"row":27,"column":29},"end":{"row":27,"column":30},"action":"insert","lines":["v"],"id":69}],[{"start":{"row":27,"column":30},"end":{"row":27,"column":31},"action":"insert","lines":["o"],"id":70}],[{"start":{"row":27,"column":31},"end":{"row":27,"column":33},"action":"insert","lines":["()"],"id":71}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"insert","lines":["1"],"id":72}],[{"start":{"row":27,"column":34},"end":{"row":27,"column":35},"action":"insert","lines":[";"],"id":73}]]},"ace":{"folds":[],"scrolltop":244.5,"scrollleft":0,"selection":{"start":{"row":24,"column":29},"end":{"row":24,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1452618065000,"hash":"63504de971e9804d13f0e60b145cbb09048cc907"}