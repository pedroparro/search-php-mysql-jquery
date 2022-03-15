<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR MYSQL - PHP - JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<h2>BUSCAR MYSQL - PHP - JS</h2>
<!--Search-->
<div class="input-group mb-3">
    <button type="button" class="btn btn-outline-secondary" id="submit">Buscar</button>
    <input type="text" class="form-control" name="search" id="search" placeholder="Digite o nome do produto">
</div>

<div id="result"></div>
<div id="resultado">
    <?php
    require('./vendor/autoload.php');
    use Models\ClassDB;

    $obj = new ClassDB();
    $row = $obj->selectDB("*","produtos","",array());
    
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
    ?>
</div>

    <!--script-->
    <script src="./public/js/jquery.js"></script>
    <script src="./public/js/script.js"></script>
</body>
</html>