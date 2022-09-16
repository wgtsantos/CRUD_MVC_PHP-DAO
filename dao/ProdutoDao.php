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

    public function listar() {
        try {
            $sql = "SELECT * FROM produto order by nome asc";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaProdutos($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }

    private function listaProdutos($linhas) {

        $produto = new Produto();
        $produto->setID($linhas['id_produto']);
        $produto->setNome($linhas['nome']);
        $produto->setPreco($linhas['preco']);
        $produto->setMarca($linhas['marca']);
        $produto->setQuantidade($linhas['quantidade']);
        $produto->setImg($linhas['imagem']);

        return $produto;
    }

    public function excluir(Produto $produto) {
        try {

            $sql = "DELETE FROM produto WHERE id_produto= :id";
            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id", $produto->getID(), PDO::PARAM_INT);
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Excluir produto" . $e->getMessage();
        }
    }

}

?>