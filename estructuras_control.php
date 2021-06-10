<?php
    //break => Rompe un bucle
    //Crear un bucle que imprima 400 números empezando del 1.
    //Detener el bucle con "break"
//     $numero = 1;
//     do {
//         echo "$numero
// ";
//         $numero++;
//         if($numero > 400)
//             break;
//     } while (true);

    //Continue: Omite los códigos que están debajo de él
    //Imprimir los números pares hasta el 20
    $numero = 1;
    while(true){
        if($numero % 2 != 0){
            $numero++;
            continue;
        }

        if($numero > 20)
            break;
            
        echo "PARES: $numero
";
        $numero++;
    }
?>