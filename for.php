<?php

/*
    for(inicialización; condición; incremento){
        código que se va a ejecutar
    }
*/

//Ejercicio 1
//Imprimir números hasta 200
for ($i=1; $i <= 200 ; $i++) { 
    print $i;
    print '
';
}

print '-------------------------------------------------------------
';

//Ejercicio 2
//Impares hasta el 20
// for($i = 1; $i < 20; $i+= 2){
//     echo "Impar: $i";
//     echo "
// ";
// }
// for($i = 1; $i <= 20; $i++){
//     if($i % 2 != 0){
//         echo "Impar: $i";
//         echo "
// ";
//     }
// }

//Ejercicio 3 (no recomendada, pero existe. Inicializar fuera del ciclo)
// $i = 1;
// for(; $i < 20; $i += 2){
//     echo "Impar: $i";
//     echo "
// ";
// }

//Incrementador dentro del bucle
$i = 1;
for(; $i < 20; ){
    echo "Impar: $i";
    echo "
";
    $i += 2;
}

//Ejercicio 4: tabla de multiplicar (ciclos anidados - 12 tablas de multiplicar del 1 al 12)

echo "---------------------------------------------------------
";

for($i = 1; $i <= 12; $i++){
    for($j = 1; $j <= 12; $j++){
        echo "$i x $j = " . $i * $j;
        echo "
";
    }
    echo "===================================
";
}