<?php
    function operacao(float $num1, float $num2, string $operacao = '+'): float
    {
        switch($operacao)
        {
            case '+':
                return $num1 + $num2;
            
            case '-':
                return $num1 - $num2;

            case '*':
                return $num1 * $num2;
            
            case '/':
                return $num1 / $num2;
            
            default;
                return 0.0;
        }
    }

    function dia_semana(int $dia) : string
    {
        $semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
        return $semana[$dia] ?? 'Use de 0 a 6';
    }

    echo "O resultado da é: " . operacao(2.5, 2.5, '-') . "<br>";
    echo "Dia da semana: " . dia_semana(7) . "<br>";

    $nome = 'Bono';

    //Passagem de parametro por referencia, o & ; - ) (muda o valor da variável fora do escopo da função)
    function muda_nome(string &$var): string
    {
        $var = 'Outro nome';
        return $var;
    }
    
    echo "<br> A função retornará: " . muda_nome($nome) . "<br>";
    echo "A variável \$nome ainda vale: $nome";