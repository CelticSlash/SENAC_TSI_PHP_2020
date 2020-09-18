<?php
    require_once 'db.php';

    //Como evitar SQL injection

    //Preparando a consulta
    $objStmt = $objBanco->prepare('INSERT INTO contatos (nome, whatsapp) VALUES (:nome, :fone)');

    //Substitui :nm e :whats pelo valor enviado pelo usuáio
    $objStmt->bindParam(':nome', $_POST['nome']);
    $objStmt->bindParam(':fone', $_POST['fone']);

    //Executa a query
    if($objStmt->execute())
    {
        $msg = 'Obrigado por se cadastrar no nosso sistema!';
    }
    else
    {
        $msg = 'Ops, algo deu errado, tente novamente.';
    }

    include 'grava_contato_tpl.php';