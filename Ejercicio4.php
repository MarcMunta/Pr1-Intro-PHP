<?php
// Generar un número aleatorio entre 1 y 6 para simular la tirada de un dado
$dado = rand(1, 6);

// Función para convertir el número en letras
function numEnLetras($num) {
    switch ($num) {
        case 1:
            return "uno";
        case 2:
            return "dos";
        case 3:
            return "tres";
        case 4:
            return "cuatro";
        case 5:
            return "cinco";
        case 6:
            return "seis";
        default:
            return "";
    }
}

// Determinar el valor de la cara opuesta
switch ($dado) {
    case 1:
        $opuesto = 6;
        break;
    case 2:
        $opuesto = 5;
        break;
    case 3:
        $opuesto = 4;
        break;
    case 4:
        $opuesto = 3;
        break;
    case 5:
        $opuesto = 2;
        break;
    case 6:
        $opuesto = 1;
        break;
}

// Mostrar el resultado en números y letras, y la cara opuesta
echo "El número obtenido es: $dado (" . numEnLetras($dado) . ")<br>";
echo "El valor de la cara opuesta es: $opuesto (" . numEnLetras($opuesto) . ")<br>";