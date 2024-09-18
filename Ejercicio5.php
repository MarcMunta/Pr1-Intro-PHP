<?php
$total = 0;
$cont = 0;

echo "Números generados: <br><br>";

// Repetir la generación de números hasta que el total supere 100
while ($total <= 100) {
    $num = rand(0, 20);
    $total += $num;
    $cont++;
    echo "<b>Número $cont:</b> &nbsp $num (Total acumulado: $total)<br>";
}

echo "<br>La suma total ha superado 100. &nbsp <b>Total final: $total</b>";