<?php
// Se declaran dos variables numéricas superiores a 10 con valores aleatorios
$num1 = rand(11, 100);
$num2 = rand(11, 100);

echo "Valor de num1: $num1 <br>";
echo "Valor de num2: $num2 <br><br>";

// Mostrar la progresión numérica de los números pares desde 0 hasta el valor de num1
echo "Progresión de números pares desde 0 hasta $num1: <br>";
for ($i = 0; $i <= $num1; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// Mostrar la progresión numérica desde num2 hasta 0 con un bucle while
echo "Progresión de $num2 hasta 0: <br>";
$contador = $num2;
while ($contador >= 0) {
    echo $contador . " ";
    $contador--;
}
echo "<br><br>";

// Mostrar la progresión numérica desde num1 a num2 con un bucle do/while
echo "Progresión de $num1 a $num2: <br>";
if ($num2 < $num1) {
    echo $num1;  // Si num2 es menor que num1, solo imprimimos num1 una vez
} else {
    $contador = $num1;
    do {
        echo $contador . " ";
        $contador--;
    } while ($contador >= $num2);
}