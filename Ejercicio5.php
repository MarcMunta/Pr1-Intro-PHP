<?php
$total = 0;
$contador = 0;

echo "Números generados: <br>";

// Repetir la generación de números hasta que el total supere 100
while ($total <= 100) {
    $numero = rand(0, 20);
    $total += $numero;
    $contador++;
    echo "Número $contador: $numero (Total acumulado: $total)<br>";
}

echo "<br>La suma total ha superado 100. Total final: $total";