<?php

$arreglo = array();
$numero = 1;
$contDivisores;

while(count($arreglo) < 10){
    $contDivisores = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $contDivisores++;
        }
    }

    if($contDivisores == 2){
        array_push($arreglo, $numero);
    }

    $numero++;
}

for($i = 0; $i < count($arreglo); $i++){
    for($j = $i; $j < count($arreglo); $j++){
        if($arreglo[$i] < $arreglo[$j]){
            $arreglo[$i] = $arreglo[$i] + $arreglo[$j];
            $arreglo[$j] = $arreglo[$i] - $arreglo[$j];
            $arreglo[$i] = $arreglo[$i] - $arreglo[$j];
        }
    }
}

print_r($arreglo);

?>