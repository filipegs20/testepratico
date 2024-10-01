<?php

$string = "Teste prático para a vaga de estágio";

// Função para inverter a string
function inverterString($str) {
    $inversa = '';
    $tamanho = strlen($str);
    
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $inversa .= $str[$i];
    }
    
    return $inversa;
}

// Chamando da função
$stringInvertida = inverterString($string);
echo "<p>String original: $string</p>";
echo "<p>String invertida: $stringInvertida</p>";
?>
