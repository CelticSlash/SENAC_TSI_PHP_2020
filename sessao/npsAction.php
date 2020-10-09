<?php
    session_start();

    $nota = $_POST['avaliacao'];
    $justificativa = $_POST['justificativa'];

    define('DSN', 'mysql:dbname=banco_nps;host=localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    $db = new PDO( DSN, DB_USER, DB_PASS);

    $stmt = $db->prepare('INSERT INTO tb_nota ( nota, justificativa) VALUES ( :nota, :motivo)');

    $stmt->bindParam(':nota', $nota);
    $stmt->bindParam(':motivo', $justificativa);

    if($stmt->execute())
    {
        echo "Pesquisa enviada com sucesso";
    }
    else
    {
        echo "Erro. Tente novamente.";
    }

    echo "<br><br> <a href='agradecimento.php?nota=$nota'>Avançar</a>";