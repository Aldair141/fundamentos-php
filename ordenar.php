<?php

$arreglo = array(5, 4, 7, 8, 44, 1, 59, 0, 99, 119, 100, 29);

//Ordenando (asc)
$auxiliar;
for($i = 0; $i < count($arreglo); $i++){
    for($j = $i; $j < count($arreglo); $j++){
        if($arreglo[$i] > $arreglo[$j]){
           $auxiliar = $arreglo[$i];
           $arreglo[$i] = $arreglo[$j];
           $arreglo[$j] = $auxiliar;
        }
    }
}

for($i = 0; $i < count($arreglo); $i++){
    print $arreglo[$i] . "\n";
}

//Ordenado (desc)
for($i = 0; $i < count($arreglo); $i++){
    for($j = $i; $j < count($arreglo); $j++){
        if($arreglo[$i] < $arreglo[$j]){
            $auxiliar = $arreglo[$i];
            $arreglo[$i] = $arreglo[$j];
            $arreglo[$j] = $auxiliar;
        }
    }
}

echo "\n";
echo "\n";
echo "\n";

for($i = 0; $i < count($arreglo); $i++){
    print $arreglo[$i] . "\n";
}