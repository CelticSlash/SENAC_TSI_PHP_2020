<?php

    require_once 'config.php';

    $objBanco = new PDO( DSN, DB_USER, DB_PASS);

    $consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

    //Super importante para debug
    //var_dump($objBanco->errorInfo());

    foreach($consulta as $registro)
    {
        echo "ID: {$registro['id']} NOME: {$registro['nome']} WHATSAPP: {$registro['whatsapp']}<br>";
    }

    //$excluir = $objBanco->query("DELETE FROM contatos WHERE id = 23");

    //$atualizar = $objBanco->query("UPDATE contatos SET nome = 'Puldo'  WHERE id = 12");

    $inserir = $objBanco->query("INSERT INTO contatos (nome, whatsapp) VALUES ('{$_POST['nm']}', '{$_POST['whats']})')");

