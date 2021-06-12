<?php
    //Ser estricto en la tipificación de variables
    declare(strict_types = 1);

    //Funciones en php

    function sumaNumeros(){
        $num1 = 2;
        $num2 = 3;
        echo "La suma de ambos elementos es: " . $num1 + $num2;
    }

    sumaNumeros();

    //Ejemplo 2: Imprimir números impares
    function numerosImpares($tope){
        for($i = 0; $i <= $tope; $i++){
            if($i % 2 != 0){
                echo "<br>";
                echo "Impar: " . $i;
            }
        }
    }

    numerosImpares("99");

    //Ejemplo 3: Sumar dos números recibidos por parámetro. Retornar el resultado
    function sumarNumeros($num1, $num2){
        return ($num1 + $num2);
    }

    echo "<br />";
    $numero = sumarNumeros(12, 40);
    echo "El número que tengo en mi parámetro es: $numero";

    //Ejemplo 4:
    function imprimeImpares(int $limite, $saltarnumero){
        for($i = 0; $i <= $limite; $i++){
            if($i === $saltarnumero)
                continue;

            if($i % 2 != 0)
                echo "<br>* Impar: $i";
        }
    }
    imprimeImpares(10, 5);

    //Ejercicio 5: Tipificando el resultado de una función
    function multiplicar($x, $y) : int {
        return $x * $y;
    }

    echo "<br>";
    echo "Resultado multiplicar ==> " . multiplicar(2, 3);

    //Ejercicio 6: Retornando un array
    function arrayImpares(int $limite) : array {
        $arrayRetorna = [];
        for($i = 1; $i <= $limite; $i++){
            if($i % 2 != 0){
                $arrayRetorna[] = $i;
                //array_push($arrayRetorna, $i);
            }
        }
        return $arrayRetorna;
    }

    echo "<br>";
    print_r(arrayImpares(20));

    //Ejemplo 7: Parámetros por defecto y opcionales
    //Los parámetros por defecto van al final
    function imprimirNombre(string $nombre = '<strong>no tengo nombre</strong>'){
        echo "Hola, mi nombre es $nombre.";
    }

    echo "<br>";
    imprimirNombre("Juan Perez");

    //Ejemplo 8: Funciones dinámica, se pueden llamar desde una variable
    //¿Para qué me serviría?
    //La llamada a las funciones es más flexible
    function sumarTresNumeros($x, $y, $z): int{
        return $x + $y + $z;
    }

    function restarTresNumeros($x, $y, $z): int{
        return $x - $y - $z;
    }

    $funcionOperacion = "restarTresNumeros";
    echo "<br>";
    echo "Resultado función dinámica: " . $funcionOperacion(9, 4, 1);

    //Funciones anónimas: no lleva nombre.
    $nombre = "Juan Aldair Ruiz Carmona";

    $imprimirNombre = function() use($nombre){
        echo $nombre;
    };

    echo "<br>";
    echo "<br>";
    $imprimirNombre();

    //Pasando argumentos por referencia
    $total = 4;

    function sumando($x, $y, &$total = null){
        $total = $x + $y + $total;
    }

    echo "<br>";
    echo $total;
    echo "<br>";
    sumando(1, 9, $total);
    echo $total;

    echo "<br>";
    echo max(1, 4, 11, 5, 4);

    echo "<br>";
    if(function_exists("sumando")){
        echo "Existe la función \"sumando\"";
    }else{
        echo "No hay esa función, boludo";
    }