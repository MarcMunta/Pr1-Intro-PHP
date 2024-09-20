<?php
$letters = "a,b,c,d,e,f";
//Convierte la cadena de letras en array
$array_letters = explode(",", $letters);
//Ordena el array de forma descendiente
rsort($array_letters);

echo "<b>Ejercicio 5</b><br><br>";

// Mostrar el array en formato solicitado
for ($i = 0; $i < count($array_letters); $i++) {
    $posicion = $i + 1;
    echo "letter {$posicion}º: " . $array_letters[$i] . "<br>";
}