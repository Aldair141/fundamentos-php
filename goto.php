<?php
    //goto => Permite saltar a otra sección del código

    //Ejercicio 1: Validar si una persona es o no es mayor de edad. Pedir la edad.
    // $edad = 25;

    // if($edad >= 18){
    //     goto mayorDeEdad;
    // }else{
    //     goto menorDeEdad;
    // }

    // exit();
    // mayorDeEdad:
    // echo 'Es mayor de edad';

    // exit();
    // menorDeEdad:
    // echo 'Es menor de edad';

    //Ejercicio 2: Imprimir números pares del 1 al 30.
    for($i = 1; $i <= 30; $i++){
        //if($i % 2 == 0){
            goto esPar;
        //}
    }

    exit();
    esPar:
    echo "$i es un número par";
    echo "
";
?>