<?php
    date_default_timezone_set('America/Sao_Paulo');

    for ($i=0; $i < 5; $i++) { 
        echo "Linha: $i <br>";
    }

    echo "<br><br>";

    $j = 0;

    while ($j < 5)
    {
        echo "Linha: $j<br>";

        $j++;
    }

    echo "<br><br>";

    $k = 0;
    
    do{
      echo "Linha:  $k<br>";

      $k++;
      
    }while($k < 5);

    //Vetor
    $semana[0] = 'Domingo';
    $semana[1] = 'Segunda';
    $semana[2] = 'Terça';
    $semana[3] = 'Quarta';
    $semana[4] = 'Quinta';
    $semana[5] = 'Sexta';
    $semana[6] = 'Sábado';

    $hoje = date('w');
    
    echo "Hoje é " . $semana[$hoje];