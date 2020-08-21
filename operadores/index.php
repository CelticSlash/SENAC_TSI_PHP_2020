<?php
    $saldo = 34.5;

    //Aspas duplas aceitam string especial
    echo "Seu saldo é $saldo";

    //Aspas simples apenas string pura
    echo '<br>Seu saldo é $saldo';

    $saldo -= 10; //Subtração

    echo "<br><br>Agora seu saldo é $saldo";

    $saldo *= 1000; //Multiplicação

    echo "<br><br>Agora seu saldo é $saldo";