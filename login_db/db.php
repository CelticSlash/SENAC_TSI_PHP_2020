<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=banco_nps';
$user = 'sa';
$password = 'bdsenac';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);