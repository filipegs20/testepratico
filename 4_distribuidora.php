<?php
// Faturamento mensal
$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53,
];

$Faturamento_total = array_sum($faturamento);       // Cálculo do faturamento total


// Cálculo do percentual de cada estado
foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $Faturamento_total) * 100;
    echo "</p>Percentual de faturamento em $estado: " . number_format($percentual, 2, ',', '.') . "%</p>";
}

// Total de faturamento
echo "<p>Faturamento total: R$ " . number_format($Faturamento_total, 2, ',', '.') . "</p>";
?>
