<?php
    session_start();

    $credenciais = [0 => ['login' => 'calango@calango.com', 'pass' => '123456'],
                    1 => ['login' => 'jorge@jorge.com', 'pass' => '654321'],
                    2 => ['login' => 'wilson@wilson.com', 'pass' => '101010'],];

    if(isset($_SESSION['login']))
    {
        include 'header_tpl.php';
        include 'index_menu_tpl.php';
        include 'footer_tpl.php';
    }
    else if (isset($_POST['entrar'])) 
    {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if(in_array( ['login' => $login, 'pass' => $senha], $credenciais) )
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;

            include 'header_tpl.php';
            include 'index_menu_tpl.php';
            include 'footer_tpl.php';
        }
        else
        {
            $msg = 'Credenciais inválidas. Tente novamente.';
            
            include 'index_tpl.php';
        }

        echo "<a href='index.php'>Sair</a>";
    }
    else
    {        
        include 'index_tpl.php';
    }