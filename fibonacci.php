<?php

function fibonacci($n) {    // Função
    $fibonacci = [0, 1];    // sequencia com 0 e 1

    // Estrutura de controle
    while (true) {
        $sequencia = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
        if ($sequencia > $n) {
            break;
        }
        $fibonacci[] = $sequencia;
    }

    return $fibonacci;
}

$numero = 21;   // Número a ser verificado

$fibonacciSequence = fibonacci($numero);       // chamando a funçãoo

// Verificando se o numero pertence a sequência
if (in_array($numero, $fibonacciSequence)) {
    echo "O número pertence à sequência de Fibonacci.";
} else {
    echo "O número não pertence à sequência de Fibonacci.";
}
?>
