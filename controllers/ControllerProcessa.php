<?php
namespace Controllers;
require("../vendor/autoload.php");
use Models\ClassDB;

class ControllerProcessa
{
    public function processaController()
    {
        if(isset($_POST['search'])){

            $search = filter_input(INPUT_POST,"search",FILTER_SANITIZE_SPECIAL_CHARS);
            $obj = new ClassDB();
            $row = $obj->selectDB("*","produtos","where produto like ?",array("%$search%"));

            echo "
                <table class='table'>
                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Produtos</td>
                        <td>Valor</td>
                    </tr>
                    </thead>
            
                    <tbody>
                    ";
            
                    foreach($row->fetchAll(\PDO::FETCH_ASSOC) as $rows){
                    //while($rows = $row->fetch(\PDO::FETCH_ASSOC)){
                        $id=$rows['id'];
                        $produto=$rows['produto'];
                        $valor=$rows['valor'];
                    echo "
                    <tr>
                        <td>$id</td>
                        <td>$produto</td>
                        <td>$valor</td>
                    </tr>
                    ";
                    }
            
                    echo "
                    </tbody>
                </table>
            ";
        }
    }
    
}
//instancia
$obj = new ControllerProcessa();
$obj->processaController();
?>