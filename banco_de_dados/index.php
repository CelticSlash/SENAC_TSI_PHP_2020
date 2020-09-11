<?php
    //Conexão com o banco
    $db = mysqli_connect("localhost", "root", "", "banco_php");
    
    //Criar tabela
    // $query = mysqli_query($db, 'CREATE TABLE contatos ( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //                                                     nome VARCHAR(255) NOT NULL,
    //                                                     whatsapp BIGINT)');


    // if ($query)
    // {
    //     echo "Tabela criada com sucesso";
    // }
    // else
    // {
    //     echo "Não foi possivel criar a tabela";
    //     echo mysqli_connect_error();
    // }

    echo "<br>";

    //Inserir dados
    // $contato = ['nome' => 'Jorge', 'whatsapp' => '551985647382'];

    // $insert = mysqli_query($db, "INSERT INTO contatos (nome, whatsapp) VALUES ('{$contato['nome']}', '{$contato['whatsapp']})')");

    // if ($insert)
    // {
    //     echo "Contato inserido com sucesso";
    // }
    // else
    // {
    //     echo "Não foi possivel inserir o contato";
    //     echo mysqli_connect_error();
    // }

    //Listar dados
    $query = mysqli_query($db, 'SELECT id, nome, whatsapp FROM contatos');

    echo "<br>
          <table border>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Whatsapp</td>
            </tr>";

    while($registro = $query->fetch_assoc())
    {
        echo "<tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>{$registro['whatsapp']}</td>
            </tr>";
    }

    echo "</table>";

    //Deletar dados
    $delete = mysqli_query($db, 'DELETE FROM contatos WHERE id = 1');

    if ($delete)
    {
        echo "Contato apagado com sucesso";
    }
    else
    {
        echo "Não foi possivel apagar o contato";
        echo mysqli_connect_error();
    }

    //$_POST, $_GET, $_REQUEST - Vetores superglobais para receber dados do usuário
    $insert = mysqli_query($db, "INSERT INTO contatos (nome, whatsapp) VALUES ('{$_POST['nm']}', '{$_POST['whats']})')");

    if ($insert)
    {
        echo "<br>Contato inserido com sucesso";
    }
    else
    {
        echo "<br>Não foi possivel inserir o contato";
        echo mysqli_connect_error();
    }

    echo "<br>Nome Enviado: {$_POST['nm']}, whatsapp: {$_POST['whats']}";
