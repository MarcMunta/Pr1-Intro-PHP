<?php
$nums6['Marta: '] = '10'; $nums6['Isabel: '] = '8'; $nums6['Luís: '] = '7'; $nums6['Miguel: '] = '5'; $nums6['Aitor: '] = '4'; $nums6['Pepe: '] = '1';
echo "<b>Ejercicio 6</b><br><br>";

echo "Notas de los estudiantes: ";
foreach( $nums6 as $clau => $valor){
 echo $clau.$valor." ";
}