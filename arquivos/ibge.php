<?php    

    echo "<pre>Conteúdo do Arquivo:\r\n\r\n";

    $fp = $fp = fopen('CIDADES_CAPITAIS_IBGE.csv', 'r');
    $count = 0;

    while($linha = fgets($fp))
    {
        $count += 1;        
    }

    fclose($fp);