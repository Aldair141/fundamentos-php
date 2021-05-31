<?php

$arreglo = array(10, 8, 2, 5, 1, 6, 0, 9);

for($i = 0; $i < count($arreglo); $i++){
    for($j = $i; $j < count($arreglo); $j++){
        if($arreglo[$i] > $arreglo[$j]){
            $arreglo[$i] = $arreglo[$i] + $arreglo[$j];
            $arreglo[$j] = $arreglo[$i] - $arreglo[$j];
            $arreglo[$i] = $arreglo[$i] - $arreglo[$j];
        }
    }
}

for($i = 0; $i < count($arreglo); $i++){
    print $arreglo[$i] . "\n";
}