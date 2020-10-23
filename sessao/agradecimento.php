<?php
    session_start();

    $nota = $_GET['nota'];
    $user = $_SESSION['user'];

    switch($nota)
    {
        case 'Péssimo':
        case 'Ruim':
        case 'Bom':
            echo "$user, O que podemos fazer para melhorar?";
        break;
        default:
            echo "Agradecemos sua opinião, $user!";
        break;
    }