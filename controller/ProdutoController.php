<?php 

require_once('../config/Conexao.php');
require_once('../dao/ProdutoDao.php');
require_once('../model/Produto.php');

//instancia as classes
$produto = new Produto();
$produtodao = new ProdutoDao();

//pega todos os dados passado por POST

$dados = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $produto->setNome($dados['nome']);
    $produto->setPreco($dados['preco']);
    $produto->setMarca($dados['marca']);
    $produto->setQuantidade($dados['qtd']);
    $produto->setImg($_FILES['img']);

    if($produtodao->criar($produto)) {

    echo "<script>
            alert('Produto Cadastrado com Sucesso!!');
            location.href = '../';
          </script>";
    }

// se a requisição for deletar
} else if(isset($_POST['excluir'])) {
  
      $produto->setID($_POST['id_del']);
      $img = $_POST['del_img'];

      if($produtodao->excluir($produto)) {
        
        $del_img = "../img/$img";
        unlink($del_img);
  
      echo "<script>
              alert('Produto Deletado com Sucesso!!');
              location.href = '../views/produto/listar.php';
          </script>";
      }
}

?>