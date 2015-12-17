<?php

class ManageUsuario {
    private $bd = null;
    private $tabla = "usuario";
    
    function __construct(DataBase $bd) {
        $this->bd = $bd;
    }
    
    function get($email){
        $parametros = array();
        $parametros["email"]=email;
        $this->bd->select($this->tabla, "*", "email = :email",$parametros );
        $row = $this->bd->getRow();
        $usuario = new Usuario();
        $usuario->set($row);
        return $usuario;
    }
    
    function delete($email){
        $parametros=array();
        $parametros["email"]=$email;
        return $this->bd->delete($this->tabla, $parametros);
    }
   
    
    function erase(Usuario $usuario){
        return $this->delete($usuario->getEmail());
    }
    
    function set(Usuario $usuario){
        //update de todos los campos menos el ID, devuelve el num de filas modificadas 
        
        $parametrosWhere=array();
        $parametrosWhere["email"]=$usuario->getEmail();
        return $this->bd->update($this->tabla, $usuario->getGenerico(), $parametrosWhere);
        
    }
    
    function insert(Usuario $usuario){
        //inserta un objeto City y devuelve el ID
        return $this->bd->insert($this->tabla, $usuario->getGenerico());
    }
    
    
    function count($condicion="1=1", $parametros=array()){
        return $this->bd->count($this->tabla, $condicion, $parametros);
    }
    
    function getList($pagina=1,$orden="",$nrpp=Contants::NRPP){
        
        $ordenPredeterminado="$orden, email";
        if($orden==="" || $orden===null){
             $ordenPredeterminado="email";
        }
      
        $registroInicial=($pagina-1)*$nrpp;
        $this->bd->select($this->tabla, "*", "1=1", array(), $ordenPredeterminado,"$registroInicial,$nrpp");
        $r=array();
        /*El 1,10 del ultimo parametro es el limite de registros por pagina*/
        
        while($row = $this->bd->getRow()){
            $usuario = new Usuario();
            $usuario->set($row);
            $r[]=$usuario;
        }
        return $r;
    }
    
    
    function getValueSelect(){
        //$table, $proyeccion="*", $parametros=array(), $orden="1", $limite=""
        $this->bd->query($this->tabla, "email", array(), "email");
        $array =array();
        while ($row=  $this->bd->getRow()){
            $array[$row[0]]=$row[1];
        }
        return $array;
    }

}

?>