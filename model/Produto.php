<?php

class Produto{
    
    private $id;
    private $nome;
    private $preco;
    private $marca;
    private $quantidade;
    private $img;
    
    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getMarca() {
        return $this->marca;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getImg() {
        return $this->img;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setImg($img) {
        $this->img = $img;
    }
    
}

