<?php

class Produto{
    public $nome;
    public $descricao;
    public $preco;

    public function imprimirobj(){
        echo "<br> Objetos Imprimidos"
    }

    public function -__construct($nome, $descricao, $preco) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this-> = $preco;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = ucfirst($nome);
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($descricao) {
        $this->preco = $preco;
    }

}

$produto1 = new Produto("Celular", "Smartphone de ùltima geração", 1000,00);
$produto2 = new Produto("Notebook", "Notebook para seu trabalho e entretenimento", 1500,00);

echo "Nome do produto 1: " . $produto1->getNome() . "<br>";
echo "Nome do produto 2: " . $produto2->getNome() . "<br>";

?>