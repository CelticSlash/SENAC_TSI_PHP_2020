<?php
    $dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=banco_teste';
    $user = 'sa';
    $password = 'bdsenac';

    $db = new PDO($dsn, $user, $password);

    $sql = 'SELECT nome, telefone FROM cliente';

    foreach($db->query($sql) as $registro)
    {
        echo "Nome: {$registro['nome']} <br> Telefone: {$registro['telefone']}<br>\n";
    }