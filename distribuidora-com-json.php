
<?php
// Ler o arquivo JSON
$json = file_get_contents('distribuidora.json');
$data = json_decode($json, true);

$valores = [];
$menorValor = PHP_FLOAT_MAX;
$maiorValor = PHP_FLOAT_MIN;

foreach ($data['faturamento'] as $registro) {
    $valor = $registro['valor'];
    if ($valor > 0) {
        $valores[] = $valor; // Adiciona somente valores positivos
        // Atualiza menor e maior valor
        if ($valor < $menorValor) {
            $menorValor = $valor;
        }
        if ($valor > $maiorValor) {
            $maiorValor = $valor;
        }
    }
}

// Cálculo da media
if (count($valores) > 0) {
    $media = array_sum($valores) / count($valores);
    
    // Contar dias com faturamento acima da media
    $diasAcimadaMedia = 0;
    foreach ($valores as $valor) {
        if ($valor > $media) {
            $diasAcimadaMedia++;
        }
    }
    
    echo "<p>Menor valor de faturamento: R$ " . number_format($menorValor, 2, ',', '.') . "</p>";
    echo "<p>Maior valor de faturamento: R$ " . number_format($maiorValor, 2, ',', '.') . "</p>";
    echo "<p>Número de dias com faturamento acima da média: " . $diasAcimadaMedia . "</p>";
} else {
    echo "Não há dados de faturamento para calcular.\n";
}
?>
