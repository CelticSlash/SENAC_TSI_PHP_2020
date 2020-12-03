<?php
    
    $dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=banco_teste';
    $user = 'sa';
    $password = 'bdsenac';

    //Como se conectar com o banco
    $db = new PDO($dsn, $user, $password);