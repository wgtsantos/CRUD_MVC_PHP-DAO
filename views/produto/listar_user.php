<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/ProdutoDao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Produto.php');

//instancia as classes
$produto = new Produto();
$produtodao = new ProdutoDao();

$login = new UserDao();

if(!$login->checkLogin()) {
    header("Location: ../login");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Listar Usuários </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style> 
            img {
                width: 100px;
                height: 80px;
            }
        </style>
        <script>

            function deletar() {
                ok = confirm("Tem certeza que deseja deletar estes dados??");
                if(ok){
                    return true;
                } else {
                    return false;
                }
            }

        </script>
    </head>
    <body>
        <h2> Visualizar Produtos - <a href="../../"> voltar </a> </h2>

        <table border="1" style="border:4px solid #09A; width:800px;">
            <tr style="background-color:#7FF;">
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Imagem</th>
            </tr>
            <?php foreach ($produtodao->listar() as $produto) : ?>
            <tr>
                <td><?= $produto->getID() ?></td>
                <td><?= $produto->getNome() ?></td>
                <td><?= $produto->getPreco() ?></td>
                <td><?= $produto->getMarca() ?></td>
                <td><?= $produto->getQuantidade() ?></td>
                <td> <img src="../../img/<?= $produto->getImg()?>" alt="<?= $produto->getImg()?>"/></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>