<?php
    $dsn = 'mysql:dbname=banco_teste;host=localhost';
    $user = 'root';
    $password = '';

    $db = new PDO($dsn, $user, $password);

    $sql = 'SELECT nome, telefone FROM cliente';

    foreach($db->query($sql) as $registro)
    {
        echo "Nome: {$registro{'nome'} Telefone: {$registro['telefone']}<br>\n";
    }