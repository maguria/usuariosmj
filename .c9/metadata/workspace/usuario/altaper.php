{"filter":false,"title":"altaper.php","tooltip":"/usuario/altaper.php","undoManager":{"mark":96,"position":96,"stack":[[{"start":{"row":0,"column":0},"end":{"row":33,"column":0},"action":"insert","lines":["<?php","    require '../clases/AutoCarga.php';","    $sesion=new Session();","?>","<html>","    <head>","        <meta charset=\"UTF-8\">","         <link rel=\"stylesheet\" href=\"../css/main.css\"/>","        <title></title>","    </head>","    <body>","         <div class=\"index\">","        <div class=\"fondo\"><img src=\"../images/fondo.png\"/></div>","        <div class=\"engloba\">","        <h2>Alta nueva</h2>","        ","            <form action=\"phpalta.php\" method=\"POST\">","            <label>Introduzca su email: <sup>*</sup><br/></label>","            <input type=\"text\" name=\"email\"/><br/>","            <label>Introduzca su clave: <sup>*</sup><br/></label>","            <input type=\"password\" name=\"clave\"/><br/>","            <label>Repita su clave: <sup>*</sup><br/></label>","            <input type=\"password\" name=\"clave2\"/><br/>","            Activo <input type=\"checkbox\" name=\"activo\" class=\"check\">","            Personal <input type=\"checkbox\" name=\"personal\" class=\"check\">","            Administrador  <input type=\"checkbox\" name=\"admin\" class=\"check\"><br/><br/>","              ","            <input type=\"submit\" name=\"registrar\" value=\"Enviar\" class=\"enviar\"/>"," </form>","   </div>     ","</div>","</body>","</html>",""],"id":2}],[{"start":{"row":24,"column":12},"end":{"row":25,"column":87},"action":"remove","lines":["Personal <input type=\"checkbox\" name=\"personal\" class=\"check\">","            Administrador  <input type=\"checkbox\" name=\"admin\" class=\"check\"><br/><br/>"],"id":3}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":12},"action":"remove","lines":["    "],"id":4}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"remove","lines":["    "],"id":5}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":23,"column":70},"end":{"row":24,"column":0},"action":"remove","lines":["",""],"id":7}],[{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"insert","lines":["p"],"id":8}],[{"start":{"row":16,"column":34},"end":{"row":16,"column":35},"action":"insert","lines":["e"],"id":9}],[{"start":{"row":16,"column":35},"end":{"row":16,"column":36},"action":"insert","lines":["r"],"id":10}],[{"start":{"row":23,"column":70},"end":{"row":23,"column":71},"action":"insert","lines":["<"],"id":11}],[{"start":{"row":23,"column":71},"end":{"row":23,"column":72},"action":"insert","lines":["b"],"id":12}],[{"start":{"row":23,"column":72},"end":{"row":23,"column":73},"action":"insert","lines":["r"],"id":13}],[{"start":{"row":23,"column":73},"end":{"row":23,"column":74},"action":"insert","lines":["/"],"id":14}],[{"start":{"row":23,"column":74},"end":{"row":23,"column":75},"action":"insert","lines":[">"],"id":15}],[{"start":{"row":23,"column":75},"end":{"row":23,"column":76},"action":"insert","lines":["<"],"id":16}],[{"start":{"row":23,"column":76},"end":{"row":23,"column":77},"action":"insert","lines":["b"],"id":17}],[{"start":{"row":23,"column":77},"end":{"row":23,"column":78},"action":"insert","lines":["r"],"id":18}],[{"start":{"row":23,"column":78},"end":{"row":23,"column":79},"action":"insert","lines":["/"],"id":19}],[{"start":{"row":23,"column":79},"end":{"row":23,"column":80},"action":"insert","lines":[">"],"id":20}],[{"start":{"row":2,"column":26},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":3,"column":4},"end":{"row":3,"column":30},"action":"insert","lines":["  if($sesion->get(\"usu\")){"],"id":22}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["<"],"id":23}],[{"start":{"row":32,"column":1},"end":{"row":32,"column":2},"action":"insert","lines":["'"],"id":24}],[{"start":{"row":32,"column":2},"end":{"row":32,"column":3},"action":"insert","lines":["p"],"id":25}],[{"start":{"row":32,"column":3},"end":{"row":32,"column":4},"action":"insert","lines":["h"],"id":26}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":5},"action":"insert","lines":["p"],"id":27}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":5},"action":"remove","lines":["p"],"id":28}],[{"start":{"row":32,"column":3},"end":{"row":32,"column":4},"action":"remove","lines":["h"],"id":29}],[{"start":{"row":32,"column":2},"end":{"row":32,"column":3},"action":"remove","lines":["p"],"id":30}],[{"start":{"row":32,"column":1},"end":{"row":32,"column":2},"action":"remove","lines":["'"],"id":31}],[{"start":{"row":32,"column":1},"end":{"row":32,"column":2},"action":"insert","lines":["?"],"id":32}],[{"start":{"row":32,"column":2},"end":{"row":32,"column":3},"action":"insert","lines":["p"],"id":33}],[{"start":{"row":32,"column":3},"end":{"row":32,"column":4},"action":"insert","lines":["h"],"id":34}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":5},"action":"insert","lines":["p"],"id":35}],[{"start":{"row":32,"column":2},"end":{"row":32,"column":5},"action":"remove","lines":["php"],"id":36},{"start":{"row":32,"column":2},"end":{"row":32,"column":16},"action":"insert","lines":["phpaltaper.php"]}],[{"start":{"row":32,"column":16},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":37}],[{"start":{"row":32,"column":16},"end":{"row":33,"column":0},"action":"remove","lines":["",""],"id":38}],[{"start":{"row":32,"column":15},"end":{"row":32,"column":16},"action":"remove","lines":["p"],"id":39}],[{"start":{"row":32,"column":14},"end":{"row":32,"column":15},"action":"remove","lines":["h"],"id":40}],[{"start":{"row":32,"column":13},"end":{"row":32,"column":14},"action":"remove","lines":["p"],"id":41}],[{"start":{"row":32,"column":12},"end":{"row":32,"column":13},"action":"remove","lines":["."],"id":42}],[{"start":{"row":32,"column":11},"end":{"row":32,"column":12},"action":"remove","lines":["r"],"id":43}],[{"start":{"row":32,"column":10},"end":{"row":32,"column":11},"action":"remove","lines":["e"],"id":44}],[{"start":{"row":32,"column":9},"end":{"row":32,"column":10},"action":"remove","lines":["p"],"id":45}],[{"start":{"row":32,"column":8},"end":{"row":32,"column":9},"action":"remove","lines":["a"],"id":46}],[{"start":{"row":32,"column":7},"end":{"row":32,"column":8},"action":"remove","lines":["t"],"id":47}],[{"start":{"row":32,"column":6},"end":{"row":32,"column":7},"action":"remove","lines":["l"],"id":48}],[{"start":{"row":32,"column":5},"end":{"row":32,"column":6},"action":"remove","lines":["a"],"id":49}],[{"start":{"row":32,"column":5},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":50}],[{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":51}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["?"],"id":52}],[{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"insert","lines":[">"],"id":53}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "],"id":54}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":["h"],"id":55}],[{"start":{"row":33,"column":5},"end":{"row":33,"column":6},"action":"insert","lines":["e"],"id":56}],[{"start":{"row":33,"column":6},"end":{"row":33,"column":7},"action":"insert","lines":["a"],"id":57}],[{"start":{"row":33,"column":7},"end":{"row":33,"column":8},"action":"insert","lines":["d"],"id":58}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":9},"action":"insert","lines":["e"],"id":59}],[{"start":{"row":33,"column":9},"end":{"row":33,"column":10},"action":"insert","lines":["r"],"id":60}],[{"start":{"row":33,"column":10},"end":{"row":33,"column":12},"action":"insert","lines":["()"],"id":61}],[{"start":{"row":33,"column":11},"end":{"row":33,"column":13},"action":"insert","lines":["''"],"id":62}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":13},"action":"insert","lines":["L"],"id":63}],[{"start":{"row":33,"column":13},"end":{"row":33,"column":14},"action":"insert","lines":["o"],"id":64}],[{"start":{"row":33,"column":14},"end":{"row":33,"column":15},"action":"insert","lines":["c"],"id":65}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["a"],"id":66}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":["o"],"id":67}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"remove","lines":["o"],"id":68}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"remove","lines":["a"],"id":69}],[{"start":{"row":33,"column":15},"end":{"row":33,"column":16},"action":"insert","lines":["a"],"id":70}],[{"start":{"row":33,"column":16},"end":{"row":33,"column":17},"action":"insert","lines":["t"],"id":71}],[{"start":{"row":33,"column":17},"end":{"row":33,"column":18},"action":"insert","lines":["i"],"id":72}],[{"start":{"row":33,"column":18},"end":{"row":33,"column":19},"action":"insert","lines":["o"],"id":73}],[{"start":{"row":33,"column":19},"end":{"row":33,"column":20},"action":"insert","lines":["n"],"id":74}],[{"start":{"row":33,"column":20},"end":{"row":33,"column":21},"action":"insert","lines":[":"],"id":75}],[{"start":{"row":33,"column":21},"end":{"row":33,"column":22},"action":"insert","lines":["i"],"id":76}],[{"start":{"row":33,"column":22},"end":{"row":33,"column":23},"action":"insert","lines":["n"],"id":77}],[{"start":{"row":33,"column":23},"end":{"row":33,"column":24},"action":"insert","lines":["d"],"id":78}],[{"start":{"row":33,"column":24},"end":{"row":33,"column":25},"action":"insert","lines":["e"],"id":79}],[{"start":{"row":33,"column":25},"end":{"row":33,"column":26},"action":"insert","lines":["x"],"id":80}],[{"start":{"row":33,"column":26},"end":{"row":33,"column":27},"action":"insert","lines":["."],"id":81}],[{"start":{"row":33,"column":27},"end":{"row":33,"column":28},"action":"insert","lines":["p"],"id":82}],[{"start":{"row":33,"column":28},"end":{"row":33,"column":29},"action":"insert","lines":["h"],"id":83}],[{"start":{"row":33,"column":29},"end":{"row":33,"column":30},"action":"insert","lines":["p"],"id":84}],[{"start":{"row":33,"column":32},"end":{"row":33,"column":33},"action":"insert","lines":[";"],"id":85}],[{"start":{"row":32,"column":5},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":86}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":1},"action":"insert","lines":["}"],"id":87}],[{"start":{"row":33,"column":1},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":88}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["e"],"id":89}],[{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"insert","lines":["l"],"id":90}],[{"start":{"row":34,"column":2},"end":{"row":34,"column":3},"action":"insert","lines":["s"],"id":91}],[{"start":{"row":34,"column":3},"end":{"row":34,"column":4},"action":"insert","lines":["e"],"id":92}],[{"start":{"row":34,"column":4},"end":{"row":34,"column":5},"action":"insert","lines":["{"],"id":93}],[{"start":{"row":35,"column":33},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":94},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":36,"column":4},"end":{"row":36,"column":5},"action":"insert","lines":["}"],"id":95},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"insert","lines":["."],"id":96}],[{"start":{"row":35,"column":22},"end":{"row":35,"column":23},"action":"insert","lines":["."],"id":97}],[{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"insert","lines":["/"],"id":98}],[{"start":{"row":35,"column":24},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":99},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":255,"scrollleft":0,"selection":{"start":{"row":35,"column":24},"end":{"row":35,"column":29},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":79,"mode":"ace/mode/php"}},"timestamp":1452715474834,"hash":"508dd4aa59f826437fea3fd75a6724e49bbf1a2d"}