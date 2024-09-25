<?php
$array = [
    "Marta" => 10,
    "Isabel" => 8,
    "Luís" => 7,
    "Miguel" => 5,
    "Aitor" => 4,
    "Pepe" => 1
];
$suma_valores = 0;
$count = 0;        
echo "<b>Ejercicio 7</b><br><br>";

foreach ($array2 as $clau => $valor) {
    $suma_valores += $valor;
    $count++;                
}
$media = $suma_valores / $count;
$media_2DC = number_format($media, 2);
echo "Media de las notas: $media_2DC<br>";
echo "Alumnos con nota por encima de la media:<br>";
foreach($array2 as $clau => $valor){
 if($media < $valor){
 echo $clau.": ".$valor."<br>";
 }
}