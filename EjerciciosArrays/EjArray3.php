<?php
$nums3['dato 1º'] = 'Sara'; $nums3['dato 2º'] = 'Martinez'; $nums3['dato 3º'] = 24; $nums3['dato 4º'] = 'Barcelona';

echo "<b>Ejercicio 3</b><br><br>";

foreach( $nums3 as $clau => $valor){
 echo $clau.":".$valor."<br>";
}
