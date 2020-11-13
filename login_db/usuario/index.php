<?php

    require '../sessao.php';

    require 'model/db.php';

    chdir( __DIR__ );

    if ( isset($_GET['apagar']) ) 
    {
        if ( !apagar_usuario( $_GET['apagar'] ) ) 
        {
            $erro = 'Erro ao tentar apagar o usuário!';
        }
    }

    if(isset($_POST['gravar']))
    {
        require 'controller/consist_cadastro.php';

        if(count($erros) == 0)
        {
            if(!editar_usuario($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['senha']))
            {
                $erros = ['Erro ao editar o usuário'];
            }
            else
            {
                $editado_ok = true;
            }
        }

    
        require '../header_tpl.php';
        require '../index_menu_tpl.php';
        require 'view/editar.php';
        require '../footer_tpl.php';

        exit();
    }

    if ( isset($_GET['editar']) ) 
    {   
        $usuario = listar($_GET['editar']);

        $nome = $usuario[0]['nome'] ?? '';
        $email = $usuario[0]['email'] ?? '';

        require '../header_tpl.php';
        require '../index_menu_tpl.php';
        require 'view/editar.php';
        require '../footer_tpl.php';

        exit();
    }

    $lista = listar();

    require 'view/lista.php';