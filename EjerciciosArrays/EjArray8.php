<?php
$array = [
    "Marta" => 10,
    "Isabel" => 8,
    "Luís" => 7,
    "Miguel" => 5,
    "Aitor" => 4,
    "Pepe" => 1
];

echo "<b>Ejercicio 8</b><br><br>";
$mejor_alumno = "";
$nota_mas_alta = 0;

foreach ($array as $alumno => $nota) {
    if ($nota > $nota_mas_alta) {
        $nota_mas_alta = $nota;
        $mejor_alumno = $alumno;
    }
}
echo "La nota más alta es $nota_mas_alta y el mejor alumno es $mejor_alumno.";
