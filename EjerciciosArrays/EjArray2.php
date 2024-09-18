<?php
$nums2['nombre'] = 'Sara'; $nums2['apellido'] = 'Martinez'; $nums2['edad'] = 23; $nums2['ciudad'] = 'Barcelona';

echo "<b>Ejercicio 2</b><br><br>";

foreach( $nums2 as $clau => $valor){
 echo $clau.":".$valor."<br>";
}