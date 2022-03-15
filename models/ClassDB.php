<?php
namespace Models;

class ClassDB extends ClassConexao
{
    private $obj;
    private $cont;

    //prepare sql
    private function prepareSql($sql,$param)
    {
        $this->countParam($param);
        $this->obj = $this->conectaDB("127.0.0.1","conta","root","")->prepare($sql);
        //if
        if($this->cont > 0){
            //for
            for($i=1; $i<$this->cont; $i++){
                $this->obj->bindValue($i,$param[$i-1]);
            }
        }
        $this->obj->execute($param);
    }

    //contador de parametros
    private function countParam($param)
    {
        $this->cont = count($param);
    }

    //select DB
    public function selectDB($fields,$table,$where,$param)
    {
        $this->prepareSql("SELECT {$fields} FROM {$table} {$where}",$param);
        return $this->obj;
    }
}
?>