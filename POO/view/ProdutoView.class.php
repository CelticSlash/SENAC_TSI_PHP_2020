<?php
    chdir(__DIR__);

    require '../controller/ProdutoController.class.php';

    class ProdutoView extends ProdutoController
    {
        public function __construct()
        {
            parent::__construct('', '', 0);
        }

        public function exibeForm()
        {
            include 'form_produto.php'
        }
    }