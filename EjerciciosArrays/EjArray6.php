<?php
$array = [
    "Marta" => 10,
    "Isabel" => 8,
    "Luís" => 7,
    "Miguel" => 5,
    "Aitor"=> 4,
    "Pepe"=> 1
];
echo "<b>Ejercicio 6</b><br><br>";

echo "Notas de los estudiantes: ";
foreach( $array as $clau => $valor){
 echo $clau.": ".$valor." ";
}