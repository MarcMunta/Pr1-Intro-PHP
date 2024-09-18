<?php
$num1 = rand(1, 100); 
$num2 = rand(1, 100);

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$div = $num1 / $num2;

echo "Valor de num1: $num1 <br>";
echo "Valor de num2: $num2 <br>";
echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "División: $div <br><br>";

if ($num1 > $num2) {
    echo "$num1 es mayor que $num2 <br>";
} elseif ($num1 < $num2) {
    echo "$num1 es menor que $num2 <br>";
} else {
    echo "$num1 es igual a $num2 <br>";
}

if ($num1 > 1 && $num2 > 1) {
    $areaTriangulo = ($num1 * $num2) / 2;
    echo "El área del triángulo con base $num1 y altura $num2 es: $areaTriangulo <br>";
} else {
    echo "Ambas variables deben ser mayores a 1 para calcular el área del triángulo.";
}