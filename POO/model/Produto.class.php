<?php

    class Produto extends PDO
    {
        //Atributos ou Propriedades
        private $nome;
        private $descricao;
        private $preco;

        //Métodos
        public function __construct(string $nome, string $descricao, string $preco)
        {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->preco = $preco;

            parent::__construct('sqlsrv:Server=localhost\\SQLEXPRESS;Database=banco_produtos', 'sa', 'bdsenac');
        }

        public function gravar(): bool
        {
            $stmt = $this->prepare('INSERT INTO produtos (nome, desricao, preco) 
                                    VALUES (:nome, :descricao, :preco)');
            
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->bindParam(':preco', $this->preco);

            return $stmt->execute();
        }
    }

    $objProduto = new Produto('Prato', 'Prato de prástico de colecionador', 239.50);