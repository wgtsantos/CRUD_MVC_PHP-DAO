<?php 

// Criação da classe Produto com o CRUD

class ProdutoDao {

    public function criar(Produto $produto) {
        try {

            $sql = "INSERT INTO produto (nome, preco, marca, quantidade, imagem) VALUES (:nome, :preco, :marca, :quantidade, :img)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":nome", $produto->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":preco", $produto->getPreco(), PDO::PARAM_STR);
            $stmt->bindValue(":marca", $produto->getMarca(), PDO::PARAM_STR);
            $stmt->bindValue(":quantidade", $produto->getQuantidade(), PDO::PARAM_STR);

            $nomep = $produto->getNome();
            $imagem = $produto->getImg();
            include '../includes/upload_img.php';
            $stmt->bindValue(":img", $nome_imagem, PDO::PARAM_STR);
            
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir Produto <br>" . $e->getMessage() . '<br>';
        }
    }

}

?>