<?php
    require '../sessao.php';   

    require 'model/db.php';

    chdir(__DIR__);

    $lista = listar();

    require 'view/lista.php';