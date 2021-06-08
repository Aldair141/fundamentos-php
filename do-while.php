<?php

/**

    do {
        Código que se ejecuta
    }while(condición);

    El do-while ejecuta primero, valida después. La primera vuelta se ejecuta aunque no se cumpla la condición

 */

 $max = 50;
 $num = 1;

 do{
    echo $num . "
";
    $num *= 2;
 }while($num <= 50);