<?php
$nums['dato 1º'] = 'Sara'; $nums['dato 2º'] = 'Martinez'; $nums['dato 3º'] = 23; $nums['dato 4º'] = 'Barcelona';

echo "<b>Ejercicio 1</b><br><br>";

foreach( $nums as $clau => $valor){
 echo $clau.":".$valor."<br>";
}