<?php
    //declare(strict_types = 1);

    function ImprimirArreglo(array $arreglo){
        echo "<ul>";
        foreach($arreglo as $key => $item){
            echo "<li>[$key] = $item</li>";
        }
        echo "</ul>";
    }