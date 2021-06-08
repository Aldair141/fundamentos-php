<?php
/*
    while(condicion que se va a cumplir para que se repita el ciclo){
        Código que voy a ejecutar
    }
*/

// $numero = 1;
// while($numero <= 30) {
//     echo $numero;
//     echo "
// ";
//     $numero++;
// }

//Números pares del 1 al 20
// $numero = 1;
// while($numero <= 20){
//     if($numero % 2 == 0)
//         echo "Par: $numero
// ";
//     $numero++;
// }

// $numero = 2;
// while($numero <= 20){
//     echo "Par: $numero
// ";
//     $numero += 2;
// }

$tabla1 = 1;
$multiplicador;
while($tabla1 <= 12){
    $multiplicador = 1;
    while($multiplicador <= 12){
        echo "$tabla1 x $multiplicador = " . $tabla1 * $multiplicador . "
";
        $multiplicador++;
    }
    echo "
";
    $tabla1++;
}