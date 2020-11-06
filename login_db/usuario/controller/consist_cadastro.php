<?php
    $nome = $_POST['nome'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $confSenha = $_POST['confSenha'] ?? null;

    $senha = trim($senha);
    $email = strtolower($email);

    $erros = [];

    //Verifica se nome tem dois ou mais caracteres
    if(strlen($nome) < 2)
    {
        $erros[] = 'O nome precisa ter no minimo 2 caracteres';
    }

    //Verifica se o email é valido
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $erros[] = 'Email inválido';
    }
    else if(ja_existe_email($email))
    {
        $erros[] = 'Email ja cadastrado';
    }

    //Verifica se a senha tem no minimo 8 caacteres
    if(strlen($senha) < 8)
    {
        $erros[] = 'A senha precisa ter pelo menos 8 caracteres';
    }
    //Verifica se a confirmação da senha bate
    else if($senha != $confSenha)
    {
        $erros[]= 'As senhas digitadas não coincidem';
    }