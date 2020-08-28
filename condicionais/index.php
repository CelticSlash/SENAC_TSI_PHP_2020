<?php
    $clima = "frio";

    if($clima == "frio")
    {
        echo "Meu pé congela!<br><br>";
    }

    $bool = '1';

    //Condicional com operador ternário
    //=== compara valor e tipo
    $var = $bool == 1 ? '$bool é igual a 1' : '$bool é diferente de true';
    echo "$var";

    $frase = "Meu pai tinha um cachorro amarelo e rosa";

    if(strpos($frase, 'Meu') !== false)
    {
        echo "<br>Encontrei o Meu";
    }
    else
    {
        echo "<br>Não há Meu algum";
    }

    echo "<br><br>";

    switch ($clima) {
        case 'quente':
        case 'tropical':
            echo "Adoro clima quente";
            if(true)
            {
                echo "<br>-- if dentro do switch";
                
                if(true)
                {
                    echo "---- if aninhado dentro do switch";
                }
            }
            break;
        
        case 'morno':
            echo "Morno é melhor que frio";
            break;  
            
        case 'frio':
            echo "Frio adoro quando está longe";
            break;

        default:
            echo "Willem";
            break;
    }

    $isso = 'véi';

    $isso = $isso ?? null;
    echo "<br><br>Olha só $isso";