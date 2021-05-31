<?php

$arreglo = array();
$numero = 1;
$contador = 0;
$contDivisores;

while($contador < 1000){
    $contDivisores = 0;
    for($i = 1; $i <= $numero; $i++){
        if($numero % $i == 0){
            $contDivisores++;
        }
    }

    if($contDivisores == 2){
        $contador++;
        array_push($arreglo, $numero);
    }
    $numero++;
}

for($i = 0; $i < count($arreglo); $i++){
    print $arreglo[$i] . "\n";
}