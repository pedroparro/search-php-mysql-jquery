<?php
namespace Models;

class ClassConexao
{
    private $server = "127.0.0.1";
    private $db = "conta";
    private $user = "root";
    private $pass = "";
    private $pdo = null;

    public function conectaDB()
    {
        try {
            $pdo = new \PDO("mysql:host=$this->server;dbname=$this->db",$this->user,$this->pass);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            //echo 'Conectado com sucesso';
        } catch (\Exception $th) {
            echo 'Erro de conexão';
            return $th->getMessage();
        }
        return $pdo;
    }
}

$pdo = new ClassConexao();
$pdo->conectaDB("127.0.0.1","conta","root","");
?>