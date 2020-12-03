<?php
    chdir(__DIR__);
    
    require '../model/Produto.class.php';

    class ProdutoController extends Produto
    {
        private $precoMinimo;

        public function __construct(string $nome, string $descricao, string $preco)
        {
            parent:: __construct($nome, $descricao, $preco);
        }

        public function vmaiorIgualPrecoMinimo(): bool
        {
            return $this->preco >= $this->precoMinimo;
        }
    }