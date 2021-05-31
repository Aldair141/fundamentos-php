<?php

$arreglo = array(4, 9, 2, 1, 6, 3, 8);

function quicksort($array){
    if(count($array) < 1){
        return array();
    }

    $left = array();
    $right = array();
    $pivot = $array[0];

    for($i = 1; $i < count($array); $i++){
        if($array[$i] < $pivot){
            array_push($left, $array[$i]);
        }else{
            array_push($right, $array[$i]);
        }
    }

    //Concatenar
    return array_merge(array(), quicksort($left), array($pivot), quicksort($right));
}

print_r(quicksort($arreglo));