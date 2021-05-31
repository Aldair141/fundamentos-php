<?php

$arreglo = array(10, 8, 2, 5, 1, 6, 0, 9);
$min;
$aux;

//Buscar la posición del valor mínimo, y al final hacer el intercambio
for($i = 0; $i < count($arreglo); $i++){
    $min = $i;
    for($j = $i; $j < count($arreglo); $j++){
        if($arreglo[$min] > $arreglo[$j]){
            $min = $j;
        }
    }

    $aux = $arreglo[$i];
    $arreglo[$i] = $arreglo[$min];
    $arreglo[$min] = $aux;
}

for($i = 0; $i < count($arreglo); $i++){
    print $arreglo[$i] . "\n";
}